@extends('default')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
@include ('components._accordionLink')
@include ('pages.kamar._tablesKamars')
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach($room as $row)
        new Swiper('.swiper-container-{{ $row->id }} .swiper', {
            loop: false,
            navigation: {
                nextEl: '.swiper-button-next-{{ $row->id }}',
                prevEl: '.swiper-button-prev-{{ $row->id }}',
            },
        });
        @endforeach
    });
</script>
@endpush