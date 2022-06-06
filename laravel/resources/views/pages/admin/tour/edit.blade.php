@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-item-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Edit {{$item->title}}</h1>
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
            <form action="{{route ('tour.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

           <div class="form-group">
                        <label for="village_id">Desa</label>
                        <select name="village_id" required class="form-control">
                             <option value="{{$item->village_id}}">Jangan Diubah</option>
                            @foreach ($villages as $village)
                                <option value="{{$village->id}}">
                                    {{$village->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="title">Nama Wisata</label>
                        <input type="text" class="form-control" name="title" placeholder="Nama Wisata" value="{{ $item->title }}">
                    </div>

                    <div class="form-group">
                        <label for="about">Deskripsi Wisata</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control" placeholder="tentang wisata">{{ $item->about }}</textarea>
                    </div>

                     <div class="form-group">
                        <label for="ticket">Harga Tiket</label>
                        <input type="text" class="form-control" name="ticket" placeholder="Harga tiket masuk per orang" value="{{ $item->ticket }}">
                    </div>

                     <div class="form-group">
                        <label for="day">Hari Operasional</label>
                        <input type="text" class="form-control" name="day" placeholder="Hari operasional wisata" value="{{ $item->day}}">
                    </div>

                     <div class="form-group">
                        <label for="time">Jam Operasional</label>
                        <input type="time" class="form-control" name="time" placeholder="Waktu/jam operasional wisata" value="{{ $item->time }}">
                    </div>

                     <div class="form-group">
                        <label for="address">Alamat Wisata</label>
                        <input type="text" class="form-control" name="address" placeholder="Alamat lengkap wisata" value="{{ $item->address}}">
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
