@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('pengguna.edit', $user) !!}
    <x-header text="Ubah {{ $user->name }}"></x-header>
    
    <x-alert></x-alert>

    <div class="row">
        @if (!$user->hasRole('administrator'))
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header">Pengguna</div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @isset($user)
                            {{ method_field('PATCH') }}
                        @endisset
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
                            <label for="permission">Permission</label>
                            @foreach ($permissions as $key => $permission)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $permission }}" id="permission{{$key}}" name="permission[]" {{ $user->can($permission) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="permission{{$key}}">
                                        {{ ucwords($permission) }}
                                    </label>
                                </div>
                            @endforeach
                            @error('permission')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <div class="col-6">
            <form role="form" method="POST" action="{{ route('user.update-password', $user->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    Password
                </div>
                <div class="card-body">
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
