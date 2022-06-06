@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-item-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Edit Galeri Wisata</h1>
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
         <form action="{{route ('tour_gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                  <div class="form-group">
                        <label for="tours_id">Wisata</label>
                        <select name="tours_id" required class="form-control">
                            <option value="{{$item->tours_id}}">Jangan Diubah</option>
                            @foreach ($tours as $tour)
                                <option value="{{$tour->id}}">
                                    {{$tour->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Foto Wisata</label>
                        <input type="file" name="image" placeholder"foto tour desa" class="form-control">
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
