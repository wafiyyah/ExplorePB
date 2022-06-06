@extends('layouts.app')
@section('title')
Wisata {{$item->title}}
@endsection

@section('content')
<div class="container">

  <div class="header">
    <h1>{{$item->title}}</h1>
  </div>

  @if($item->galleries->count())
    <div class="gallery">
      <div class="xzoom-container">
        <img 
        src="{{ Storage::url($item->galleries->first()->image) }}" alt="pantai" 
        class="xzoom" 
        width=50%"
        id="xzoom-default" 
        xoriginal="img/mercu pb 1-2.jpg">
      </div>
      <div class="xzoom-thumbs">
      @foreach ($item->galleries as $gallery)
        <a href="{{Storage::url($gallery->image)}}">
          <img 
          src="{{Storage::url($gallery->image)}}" 
          class="xzoom-gallery" width="128" 
          xpreview="{{Storage::url($gallery->image)}}">
        </a>
      @endforeach
      
      </div>
    </div>
  
  @endif
    <div class="desk-wisata">
      <p>{{$item->about}}</p>
    </div>

    <div class="detail-wisata">
      <div class="tiket">
        <div class="ikon">
          <i class="fa fa-ticket" aria-hidden="true"></i>
        </div>
        <hr>
        <h5>Rp {{$item->ticket}}/orang</h5>
      </div>

      <div class="jam-oprasional">
        <div class="ikon">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
        </div>
        <hr>
        <div class="hari">
          <h5>{{$item->day}}</h5>
        </div>
        <div class="jam">
          <h5>{{$item->time}} WIB</h5>
        </div>
      </div>

      <div class="lokasi">
        <div class="ikon">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <hr>
        <h5>{{$item->address}}</h5>
      </div>
    </div>
    
  </div>

@endsection


@push('prepend-style')
  <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/DetailWisata.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('frontend/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
  <script src="{{url ('frontend/scripts/jquery-3.1.1.min.js')}}"></script>
  <script src="{{url ('frontend/xzoom/xzoom.min.js')}}"></script>
  <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomwidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
@endpush