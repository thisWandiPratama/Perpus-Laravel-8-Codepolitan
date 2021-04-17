<a href="{{route('admin.auhtor.edit', $model) }}" class="btn btn-warning">Edit</a>
{{-- <a href="{{route('admin.auhtor.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</a> --}}
<a href="{{route('admin.auhtor.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</a>

{{-- <form action="{{route('admin.auhtor.destroy', $model) }}" method="post">
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" class="btn btn-danger">
</form> --}}

<script>
    $('.delete').on('click', function(e) {
        console.log('testts')
        e.preventDefault();

        var href = $(this)->attr('href');

        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
    })
</script>

