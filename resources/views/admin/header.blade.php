@extends('includes.admin-layout')
@section('content')
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
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
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Header</h1>
    <form method="POST" action="{{ route('admin.ubahHeader') }}" enctype="multipart/form-data" id="formSejarah">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6 pb-5">
                <div class="card border-primary mb-3">
                    <div class="card-header">
                        Facebook
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pb-5">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Youtube
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pb-5">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Telepon
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pb-5">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Email
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" class="form-control" id="" aria-describedby="">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<script>

</script>
@endsection
