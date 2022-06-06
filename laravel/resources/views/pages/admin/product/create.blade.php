@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Tambah Produk</h1>
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
         <form action="{{route ('product.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for="title">Nama Produk</label>
                        <input type="text" class="form-control" name="title" placeholder="Nama Produk" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="about">Deskripsi Produk</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control" placeholder="Tuliskan deskripsi produk"> {{ old ('about')}}</textarea>
                    </div>

                     <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" class="form-control" name="price" placeholder="Harga jual produk" value="{{ old('price') }}">
                    </div>

                    <div class="form-group">
                        <label for="seller">Nama Penjual</label>
                        <input type="text" class="form-control" name="seller" placeholder="Nama penjual" value="{{ old('seller') }}">
                    </div>

                      <div class="form-group">
                        <label for="contact">Kontak</label>
                        <input type="text" class="form-control" name="contact" placeholder="Masukkan email desa" value="{{ old('contact') }}">
                    </div>


                    <div class="form-group">
                        <label for="address">Alamat Penjual/Toko</label>
                        <input type="text" class="form-control" name="address" placeholder="Tuliskan alamat toko" value="{{ old('address') }}">
                    </div>

                       <div class="form-group">
                        <label for="image">Foto Produk</label>
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
