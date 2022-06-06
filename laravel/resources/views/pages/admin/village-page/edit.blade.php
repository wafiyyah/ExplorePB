@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-item-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Edit Halaman Profil Desa {{$item->title}}</h1>
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
         <form action="{{route ('village_page.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
                    <div class="form-group">
                        <label for="title">Nama Desa</label>
                        <input type="text" class="form-control" name="title" placeholder="Nama Desa" value="{{ $item->title}}">
                    </div>
                    <div class="form-group">
                        <label for="DeskProfil">Deskripsi Desa</label>
                        <textarea name="DeskProfil" rows="10" class="d-block w-100 form-control" placeholder="Tuliskan deskripsi desa dengan menarik">{{ $item->DeskProfil}}</textarea>
                    </div>
                     <div class="form-group">
                        <label for="titleMaps">Jenis Peta</label>
                        <input type="text" class="form-control" name="titleMaps" placeholder="Tuliskan Jenis Peta" value="{{ $item->titleMaps }}">
                    </div>
                     <div class="form-group">
                        <label for="urlGmaps">Link URL Gmaps</label>
                        <textarea name="urlGmaps" rows="10" wrap="hard" class="d-block w-100 form-control" placeholder="Masukkan link embedded googlemaps">{{ $item->urlGmaps }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="heads">Alamat Desa lengkap</label>
                        <input type="text" class="form-control" name="adress" placeholder="Tuliskan alamat desa lengkap" value="{{ $item->adress }}">
                    </div>
                     <div class="form-group">
                        <label for="twt">Twitter</label>
                        <input type="text" class="form-control" name="twt" placeholder="Tuliskan username twitter desa" value="{{ $item->twt }}">
                    </div>
                     <div class="form-group">
                        <label for="ig">Instagram</label>
                        <input type="text" class="form-control" name="ig" placeholder="Tuliskan username instagram desa" value="{{ $item->ig }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Tuliskan email desa" value="{{ $item->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
            </div>
         </form>
        </div>
    </div>
           
    <!-- /.container-fluid -->
@endsection
