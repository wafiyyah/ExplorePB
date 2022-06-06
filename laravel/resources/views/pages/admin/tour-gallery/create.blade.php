@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Galeri Wisata</h1>
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
         <form action="{{route ('tour_gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                    <div class="form-group">
                        <label for="tours_id">Wisata</label>
                        <select name="tours_id" required class="form-control">
                            <option value="">Pilih Wisata</option>
                            @foreach ($tours as $tour)
                                <option value="{{$tour->id}}">
                                    {{$tour->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Foto wisata</label>
                        <input type="file" name="image" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
         </form>
        </div>
    </div>
           
    <!-- /.container-fluid -->
@endsection
