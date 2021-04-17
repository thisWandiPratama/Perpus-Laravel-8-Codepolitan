<a href="{{route('admin.auhtor.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{route('admin.auhtor.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $("button#delete").on('click', function(e) {
        e.preventDefault();

        var href = $("#delete").attr("href");
        console.log(href)

        swal({
            title: "Apakah kamu yakin ingin hapus data ini?",
            text: "Data akan terhapus secara permanen!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                swal("Berhasil! Data telah terhapus!", {
                icon: "success",
                });
            } else {
                swal("Data kamu masih aman!");
            }
    });
})
</script>

