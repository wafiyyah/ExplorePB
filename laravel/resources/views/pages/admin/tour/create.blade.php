@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Tambah Tempat Wisata</h1>
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
         <form action="{{route ('tour.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for="title">Nama Wisata</label>
                        <input type="text" class="form-control" name="title" placeholder="Masukkan nama wisata" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="about">Deskripsi Wisata</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control" placeholder="Deskripsi tempat wisata">{{ old('about')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="ticket">Harga Tiket</label>
                        <input type="text" class="form-control" name="ticket" placeholder="Harga tiket masuk per orang"  value="{{ old('ticket') }}">
                    </div>

                     <div class="form-group">
                       <label for="day">Hari Opresional</label>
                        <input type="text" class="form-control" name="day" placeholder="Hari oprasional wisata" value="{{ old('day') }}">
                    </div>

                     <div class="form-group">
                        <label for="time">Jam Oprational</label>
                        <input type="time" class="form-control" name="time" placeholder="Waktu/jam oprasional wisata" value="{{ old('time') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Alamat Wisata/Toko</label>
                        <input type="text" class="form-control" name="address" placeholder="Tuliskan alamat wisata" value="{{ old('address') }}">
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
