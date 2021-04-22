<a href="{{route('admin.author.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{route('admin.author.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $("button").on('click', function(e) {
        e.preventDefault();

        var href = $(this).attr("href");
        console.log(href)

        swal({
            title: "Apakah kamu yakin ingin hapus data ini?",
            text: "Data akan terhapus secara permanen!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            console.log(willDelete)
            if (willDelete) {

                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                swal("Berhasil! Data telah terhapus!", {
                icon: "success",
                });
            }
    });
})
</script>

