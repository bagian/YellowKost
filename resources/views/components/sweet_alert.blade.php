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