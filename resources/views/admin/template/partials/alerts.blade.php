<script>

@if (session('success'))
    $.notify({
        // options
        message: '{{session('success')}}'
    },{
        // settings
        type: "success",
        offset: 100,
        delay: 2000,
        timer: 1000,
    });
@endif

@if (session('info'))
    $.notify({
        // options
        message: '{{session('info')}}'
    },{
        // settings
        type: 'info',
        offset: 100,
        delay: 2000,
        timer: 1000,
    });
@endif


@if (session('danger'))
    $.notify({
        // options
        message: '{{session('danger')}}'
    },{
        // settings
        type: 'danger',
        offset: 100,
        delay: 5000,
        timer: 1000,
    });
@endif

</script>
