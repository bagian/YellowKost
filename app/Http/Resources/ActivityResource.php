<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array for the view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // CATEGORY mapping
        $categories = [
            'maintenance' => [
                'label' => 'Perbaikan',
                'class' => 'bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 border-blue-200 dark:border-blue-800',
            ],
            'service' => [
                'label' => 'Jasa',
                'class' => 'bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 border-purple-200 dark:border-purple-800',
            ],
            'supply' => [
                'label' => 'Perlengkapan',
                'class' => 'bg-orange-50 dark:bg-orange-900/20 text-orange-700 dark:text-orange-300 border-orange-200 dark:border-orange-800',
            ],
        ];

        $category = $categories[$this->category] ?? [
            'label' => ucfirst($this->category),
            'class' => '',
        ];

        // PRIORITY HTML
        $priorityHtml = match ($this->priority) {
            'high' => '<span class="flex items-center text-xs font-bold text-red-600 dark:text-red-400"><span class="w-2 h-2 mr-2 bg-red-600 rounded-full animate-pulse"></span> Tinggi</span>',
            'medium' => '<span class="flex items-center text-xs font-bold text-yellow-600 dark:text-yellow-400"><span class="w-2 h-2 mr-2 bg-yellow-500 rounded-full"></span> Sedang</span>',
            'low' => '<span class="flex items-center text-xs font-bold text-gray-500 dark:text-gray-400"><span class="w-2 h-2 mr-2 bg-gray-400 rounded-full"></span> Rendah</span>',
            default => '',
        };

        // STATUS HTML
        $statusHtml = match ($this->status) {
            'incomplete' => '<div class="inline-flex items-center px-3 py-1 text-xs font-bold text-red-700 bg-red-100 border border-red-200 rounded-full dark:bg-red-900/30 dark:text-red-300 dark:border-red-800">Belum Dikerjakan</div>',
            'progress' => '<div class="inline-flex items-center px-3 py-1 text-xs font-bold text-yellow-700 bg-yellow-100 border border-yellow-200 rounded-full dark:bg-yellow-900/30 dark:text-yellow-300 dark:border-yellow-800">Sedang Proses</div>',
            'completed' => '<div class="inline-flex items-center px-3 py-1 text-xs font-bold text-green-700 bg-green-100 border border-green-200 rounded-full dark:bg-green-900/30 dark:text-green-300 dark:border-green-800">Selesai</div>',
            default => '',
        };

        // ACTION buttons HTML
        $actionHtml = '<div class="flex items-center justify-center gap-2">';
        if ($this->status !== 'completed') {
            $actionHtml .= "<button class='p-2 text-green-600 transition-all border border-green-200 rounded-lg shadow-sm btn-done bg-green-50 dark:bg-green-900/20 dark:text-green-400 hover:bg-green-100 dark:hover:bg-green-900/40 dark:border-green-800' data-id='{$this->id}' title='Tandai Selesai'>✓</button>";
        }
        if ($this->status === 'incomplete') {
            $actionHtml .= "<button class='p-2 text-yellow-600 transition-all border border-yellow-200 rounded-lg shadow-sm btn-progress bg-yellow-50 dark:bg-yellow-900/20 dark:text-yellow-400 hover:bg-yellow-100 dark:hover:bg-yellow-900/40 dark:border-yellow-800' data-id='{$this->id}' title='Proses'>⏱</button>";
        }
        $actionHtml .= "<button class='p-2 text-gray-400 transition-all bg-white border border-gray-200 rounded-lg shadow-sm btn-delete dark:bg-gray-700 hover:bg-red-50 hover:text-red-500 dark:hover:bg-red-900/20 dark:hover:text-red-400 dark:border-gray-600 hover:border-red-200' data-id='{$this->id}' title='Hapus'>🗑</button>";
        $actionHtml .= '</div>';

        return [
            'id' => $this->id,
            'title' => $this->title,
            'room_name' => $this->room->room_name ?? '',
            'amount' => $this->amount,
            'date' => $this->date?->format('d/m/Y'),
            'category' => [
                'value' => $this->category,
                'label' => $category['label'],
                'class' => $category['class'],
            ],
            'priority_html' => $priorityHtml,
            'status_html' => $statusHtml,
            'action_html' => $actionHtml,
        ];
    }
}
