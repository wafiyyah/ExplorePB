@extends('layouts.app')

@section('title')
Produk Lokal
@endsection

@section('content')
<!-- Jumbotron -->
 <div class="header">
      <div class="jumbotron"  style="background-image: url('frontend/images/mercu pb 1-2.jpg');">
            <div class="display">
                <h3>Industri dan Produk Lokal Pulau Besar</h3>
            </div>
        </div>
  </div>

 <div class="container-produk">
    <div class="cards-produk">
    
    @foreach ($items as $item)
      <div class="card-produk">
       
        <div class="gmb-produk">
          <img src="{{ Storage::url($item->image) }}" alt="">
        </div>
        
        <div class="konten">
            <div class="judul-produk">
              <h3>{{$item->title}}</h3>
            </div>
          
            <div class="desk-produk">
              <p>{{$item->about}}</p>
            </div>
          
            <div class="harga">
              <h3> RP {{$item->price}}</h3>
            </div>
          
            <div class="nama-penjual">
              <p>{{$item->seller}}</p>
            </div>
            
            <div class="alamat-penjual">
              <p>Informasi lebih lanjut:</p>
            </div>

            <div class="kontak-penjual">
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$item->contact}}" style="color: #6dbedc" target="_blank">
                  {{$item->contact}}</a>
            </div>
          
            <div class="alamat-penjual">
              <p>{{$item->address}}</p>
            </div>
          
            <div class="alamat-penjual">
              <p>{{$item->village->title}}</p>
            </div>
        </div>
      </div>
  @endforeach
    </div>
  </div>
  <div class="pegi">
    {{$items->links()}}
  </div>
@endsection

@push('prepend-style')
  <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/produk.css?ver=1.1')}}">
@endpush
