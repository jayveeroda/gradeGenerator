<script>
    @if (session()->has('success'))
        Swal.fire({
            icon: 'success',
            title: '{{ session()->get('success') }}',
            showConfirmButton: false,
            timer: 1500
        })
    @endif

    @if (session()->has('danger'))
        Swal.fire({
            icon: 'error',
            title: '{{ session()->get('danger') }}',
            showConfirmButton: false,
            timer: 1500
        })
    @endif
</script>
