<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomPicture;
use App\Models\User;
use App\Models\Payment;
use App\Models\Journal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Core Lookups
        $this->call([
            RoleSeeder::class,
            PaymentMethodSeeder::class,
            UserSeeder::class, // Includes 1 admin and 10 regular users
        ]);

        // Create a dummy file for the RoomPicture model to reference
        if (!Storage::disk('public')->exists('placeholder.jpg')) {
            // Create a simple placeholder file
            Storage::disk('public')->put('placeholder.jpg', '');
        }

        // Get the IDs of all regular users (role 2) for assignment
        $allUsers = User::where('id_role', 1)->pluck('id');
        // Get payment method IDs for journal entries
        $paymentMethods = DB::table('payment_methods')->pluck('id')->toArray();

        // --- ROOMS & BOOKINGS ---

        // A. 5 Rooms with CONFIRMED/CURRENT Bookings (is_available = false)
        $confirmedRooms = Room::factory()->count(5)->booked()->create();

        foreach ($confirmedRooms as $room) {
            // 1. Create a confirmed booking (current tenant)
            $booking = Booking::factory()->confirmed()->create([
                'id_room' => $room->id,
                'id_user' => $allUsers->random(),
            ]);
            RoomPicture::factory()->create(['id_room' => $room->id]);

            // 2. Create Down Payment (DP) and Full Payment for confirmed booking
            // Payments are recorded here. Journals are intentionally skipped as per user instruction.

            // DP
            $dp = Payment::factory()->downPayment()->create([
                'id_booking' => $booking->id,
            ]);

            // Full Payment (assuming the total payment includes the rest of the rent)
            $fullPayment = Payment::factory()->fullPayment()->create([
                'id_booking' => $booking->id,
                'date' => (clone $dp->date)->modify('+1 week'),
            ]);
        }

        // B. 3 Rooms with COMPLETED Bookings (is_available = true)
        $completedRooms = Room::factory()->count(3)->create();
        foreach ($completedRooms as $room) {
            // 1. Create a completed booking (past tenant)
            $booking = Booking::factory()->completed()->create([
                'id_room' => $room->id,
                'id_user' => $allUsers->random(),
            ]);
            RoomPicture::factory()->create(['id_room' => $room->id]);

            // 2. Create a single payment for the completed rental
            // Payments are recorded here. Journals are intentionally skipped as per user instruction.
            $payment = Payment::factory()->fullPayment()->create([
                'id_booking' => $booking->id,
                'date' => $booking->check_in,
                'is_dp' => false,
            ]);
        }

        // C. 4 Rooms with PENDING Bookings (is_available = true) - NO PAYMENTS
        $pendingRooms = Room::factory()->count(4)->create();
        foreach ($pendingRooms as $room) {
            Booking::factory()->create([ // Base factory state is 'pending'
                'id_room' => $room->id,
                'id_user' => $allUsers->random(),
            ]);
            RoomPicture::factory()->create(['id_room' => $room->id]);
        }

        // D. 3 Rooms with CANCELLED Bookings (is_available = true) - NO PAYMENTS
        $cancelledRooms = Room::factory()->count(3)->create();
        foreach ($cancelledRooms as $room) {
            Booking::factory()->cancelled()->create([
                'id_room' => $room->id,
                'id_user' => $allUsers->random(),
            ]);
            RoomPicture::factory()->create(['id_room' => $room->id]);
        }

        // E. Create 10 arbitrary expenditure journal entries for financial reports
        // This remains, as Journals are specifically for expenditure/non-rent income.
        Journal::factory()->expenditure()->count(10)->create([
            'payment_method' => $paymentMethods[array_rand($paymentMethods)],
        ]);

        // Total rooms = 5 + 3 + 4 + 3 = 15.
    }
}