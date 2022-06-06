@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-item-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Edit Artikel</h1>
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
         <form action="{{route ('article.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                  <div class="form-group">
                        <label for="village_pages_id">Desa</label>
                        <select name="village_pages_id" required class="form-control">
                            <option value="{{$item->village_pages_id}}">Pilih Desa</option>
                            @foreach ($village_pages as $village_page)
                                <option value="{{$village_page->id}}">
                                    {{$village_page->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $item->title }}">
                    </div>

                    <div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" name="author" placeholder="Penulis" value="{{ $item->author  }}">
                    </div>

                    <div class="form-group">
                        <label for="post">Tulisan</label>
                        <textarea name="post" rows="10" class="d-block w-100 form-control">{{ $item->post }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Foto Artikel</label>
                        <input type="file" name="image" placeholder="Foto Artikel" class="form-control">
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
