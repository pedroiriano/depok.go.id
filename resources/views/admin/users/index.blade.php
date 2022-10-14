@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('pengguna') !!}

    <x-header text="pengguna">
        <x-button route="user.create" icon="fas fa-plus">
            Tambah Pengguna
        </x-button>
        <x-button route="admin.create" icon="fas fa-plus" class="btn btn-info">
            Tambah Admin
        </x-button>
    </x-header>

    <x-alert></x-alert>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="border-top-0">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
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
                                @if ($user->email != 'admin@depok.go.id')    
                                    <button class="btn btn-danger btn-sm btn-icon-split" data-toggle="modal" data-target="#deleteModal-{{ $key }}">
                                        <span class="icon">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>
                                @endif
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
</div>
@endsection