<a href="{{ $editUrl }}" class="btn btn-success btn-sm btn-icon-split" title="Ubah">
    <span class="icon"><i class="fas fa-edit"></i></span>
    <span class="text">Ubah</span>
</a>

<form action="{{ $deleteUrl }}" method="POST" class="d-inline">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger btn-sm btn-icon-split" onclick='return confirm("Apakah anda yakin untuk menghapus data ini?")' style="">
        <span class="icon"><i class="fas fa-trash"></i></span>
        <span class="text">Hapus</span>
    </button>
</form>