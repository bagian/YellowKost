@props([
'route' => '#',
'title' => 'Menu',
'active' => null,
'badge' => null,
])

@php
// 1. Tentukan pola aktif
$activePattern = $active ?? $route;

// 2. Cek Active State
$isActive = false;
if ($activePattern !== '#' && request()->routeIs($activePattern)) {
$isActive = true;
}

// 3. Generate URL Aman
$href = '#';
if (str_starts_with($route, 'http')) {
$href = $route;
} else {
if (\Illuminate\Support\Facades\Route::has($route)) {
$href = route($route);
} elseif (\Illuminate\Support\Facades\Route::has($route . '.index')) {
$href = route($route . '.index');
}
}

// 4. Styles
$baseClass = "flex items-center p-2 rounded-lg group transition-colors duration-200";
$activeClass = "bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400 font-bold";
$inactiveClass = "text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700";

$classes = $baseClass . ' ' . ($isActive ? $activeClass : $inactiveClass);

// 5. Icon Styles
$iconActive = "text-yellow-600 dark:text-yellow-400";
$iconInactive = "text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white";
$iconClass = "w-5 h-5 transition duration-75 shrink-0 " . ($isActive ? $iconActive : $iconInactive);
@endphp

<li>
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        <div class="{{ $iconClass }}">
            {{ $slot ?? '' }}
        </div>
        <span class="ms-3 flex-1 whitespace-nowrap">{{ $title }}</span>

        @if($badge)
        <span
            class="inline-flex items-center justify-center text-xs font-medium text-red-800 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-300">
            {{ $badge }}
        </span>
        @endif
    </a>
</li>
