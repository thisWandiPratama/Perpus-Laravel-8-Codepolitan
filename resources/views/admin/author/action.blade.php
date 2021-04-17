<a href="{{route('admin.auhtor.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{route('admin.auhtor.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script>

    $("button#delete").on('click', function(e) {
        e.preventDefault();

        var href = $("#delete").attr("href");
        console.log(href)

        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
    })
</script>

