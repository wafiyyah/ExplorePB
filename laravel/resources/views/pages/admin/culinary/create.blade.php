@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Tambah Kuliner</h1>
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
         <form action="{{route ('culinary.store') }}" method="post" enctype="multipart/form-data">
            @csrf

               <div class="form-group">
                        <label for="village_id">Desa</label>
                        <select name="village_id" required class="form-control">
                            <option value="">Pilih Desa</option>
                            @foreach ($villages as $village)
                                <option value="{{$village->id}}">
                                    {{$village->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Nama Kuliner</label>
                        <input type="text" class="form-control" name="title" placeholder="Nama Kuliner" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="about">Deskripsi Kuliner</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control" placeholder="Tuliskan Profil Desa">{{ old('about')}}</textarea>
                    </div>

                     <div class="form-group">
                        <label for="material">Bahan Dasar</label>
                        <input type="text" class="form-control" name="material" placeholder="bahan dasar dari kuliner" value="{{ old('material') }}">
                    </div>

                       <div class="form-group">
                        <label for="image">Foto Kuliner</label>
                        <input type="file" name="image" class="form-control">
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
