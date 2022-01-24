@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @empty($user)
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Tambah User</h1>
    @else
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Ubah Pengguna</h1>
    @endempty
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Whoops!</strong> There were some problems with your input.
    </div>
    @endif
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header">User</div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ empty($user) ? route('user.store') : route('user.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @isset($user)
                            {{ method_field('PATCH') }}
                        @endisset
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama User" value="{{ old('nama', $user->name ?? '') }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{ old('email', $user->email ?? '') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="custom-select" name="role_id">
                                        <option selected disabled>Pilih Role</option>
                                        @foreach ($roles as $key => $role)
                                        @if (isset($user))    
                                            <option value="{{ $key }}" {{ $user->roles->pluck('name')[0] == $role ? 'selected' : '' }}>{{ $role }}</option>
                                        @else
                                            <option value="{{ $key }}">{{ $role }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Confirmation</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
                                </div>
                            </div>
                        </div>
                    </div>     
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('node_modules/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    $('#image, #file').on('change',function(e){
        var fileName = e.target.files[0].name;;
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endsection
