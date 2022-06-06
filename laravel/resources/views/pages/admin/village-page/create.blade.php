@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Tambah Halaman Profil Desa</h1>
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
         <form action="{{route ('village_page.store') }}" method="post">
            @csrf
                    <div class="form-group">
                        <label for="title">Nama Desa</label>
                        <input type="text" class="form-control" name="title" placeholder="Nama Desa" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="DeskProfil">Deskripsi Desa</label>
                        <textarea name="DeskProfil" rows="10" class="d-block w-100 form-control" placeholder="Tuliskan deskripsi desa dengan menarik">{{ old('DeskProfil')}}</textarea>
                    </div>
                     <div class="form-group">
                        <label for="titleMaps">Jenis Peta</label>
                        <input type="text" class="form-control" name="titleMaps" placeholder="Nama Desa" value="{{ old('titleMaps') }}">
                    </div>
                     <div class="form-group">
                        <label for="urlGmaps">Link URL Gmaps</label>
                        <textarea name="urlGmaps" rows="10" class="d-block w-100 form-control" placeholder="Masukkan link embeded googlemaps">{{ old('urlGmaps')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="adress">Alamat Desa lengkap</label>
                        <input type="text" class="form-control" name="adress" placeholder="Tuliskan alamat desa lengkap" value="{{ old('adress') }}">
                    </div>
                     <div class="form-group">
                        <label for="twt">Twitter</label>
                        <input type="text" class="form-control" name="twt" placeholder="Tuliskan username twitter desa" value="{{ old('twt') }}">
                    </div>
                     <div class="form-group">
                        <label for="ig">Instagram</label>
                        <input type="text" class="form-control" name="ig" placeholder="Tuliskan username instagram desa" value="{{ old('ig') }}">
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Tuliskan email desa" value="{{ old('email') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
            </div>
         </form>
        </div>
    </div>
           
    <!-- /.container-fluid -->
@endsection
