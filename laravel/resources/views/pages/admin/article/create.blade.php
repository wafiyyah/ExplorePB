@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
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
         <form action="{{route ('article.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                    <div class="form-group">
                        <label for="village_pages_id">Desa</label>
                        <select name="village_pages_id" required class="form-control">
                            <option value="">Pilih Desa</option>
                            @foreach ($village_pages as $village_page)
                                <option value="{{$village_page->id}}">
                                    {{$village_page->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title') }}">
                    </div>

                     <div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" name="author" placeholder="Penulis" value="{{ old('author') }}">
                    </div>

                    <div class="form-group">
                        <label for="post">Tulisan</label>
                        <textarea name="post" rows="10" class="d-block w-100 form-control">{{ old('post') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Foto Artikel</label>
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
