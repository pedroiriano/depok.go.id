@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('pengguna.create') !!}
    <x-header text="Tambah Admin"></x-header>

    <x-alert></x-alert>

    <div class="row">
        <div class="col-6">
            <form role="form" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header">Administrator</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Administrator</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Administrator" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                        @error('email')
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Kembali</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection