{{-- @can('update', $model) --}}
    <a href="{{ $editUrl }}" class="btn btn-sm btn-success btn-icon-split btn-edit" title="Ubah" style="text-decoration:none">
        <span class="icon">
            <i class="fas fa-edit"></i>
        </span>
        <span class="text">Ubah</span>
    </a>
{{-- @endcan --}}

{{-- @can('delete', $model) --}}
    {{-- @if (!Request::routeIs('admin.permissions.*')) --}}
    <a href="{{ $deleteUrl }}" class="btn btn-sm btn-danger btn-icon-split btn-delete" data-toggle="modal" data-target="#delete-modal" data-name="{{ $modelName }}" data-model="{{ $modelText }}" title="Delete">
        <span class="icon">
            <i class="fas fa-trash"></i>
        </span>
        <span class="text">Hapus</span>
    </a>
    {{-- @endif --}}
{{-- @endcan --}}
