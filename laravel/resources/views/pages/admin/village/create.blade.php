@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Desa</h1>
        </div>

    <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('village.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama Desa</label>
                        <input type="text" class="form-control" name="title" placeholder="Nama Desa" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="heads">Admin</label>
                        <input type="text" class="form-control" name="heads" placeholder="Nama Admin" value="{{ old('heads') }}">
                    </div>
                    <div class="form-group">
                        <label for="contacts">Kontak Admin</label>
                        <input type="text" class="form-control" name="contacts" placeholder="Nomor Telepon" value="{{ old('contacts') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
