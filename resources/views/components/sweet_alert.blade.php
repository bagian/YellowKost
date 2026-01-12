@if (session('success'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

@if (session('error'))
<script>
    Swal.fire({
        position: 'center',
        title: "Terima kasih!",
        title: "{{ session('transaksi') }}"
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

{{-- @if (session('confirmation_booking'))
<script>
    Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "success",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "error"
        });
    }
    });
</script>
@endif --}}