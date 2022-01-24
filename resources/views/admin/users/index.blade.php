@extends('includes.admin-layout')
@section('content')
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">User</h1>
    <a class="btn btn-primary btn-icon-split text-white mb-4" href="{{ route('user.create') }}">
        <span class="icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah User</span>
    </a>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                @foreach ($user->getRoleNames() as $roleNames)
                                    {{ $roleNames }}
                                @endforeach
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" style="text-decoration:none;">
                                    <button class="btn btn-success btn-sm btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </button>
                                </a>
                                <button class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal" data-target="#deleteModal-{{ $key }}">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body" id="delete-modal-body">
                                                Apakah anda yakin menghapus user {{$user->name}}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>
$(document).on('click','.delete',function(){
    let id = $(this).attr('data-id');
    let name = $(this).attr('data-name');
    $('#id').val(id);
    $('#delete-modal-body').text(" Apakah anda ingin menghapus " + name + "?");
});
</script>
@endsection