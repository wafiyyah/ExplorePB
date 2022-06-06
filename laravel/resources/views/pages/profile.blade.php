@extends('layouts.app')

@section('title')
Profil Desa {{ $item->title }}
@endsection

@section('content')
<!-- Jumbotron -->
<div class="header">
    <div class="jumbotron" style="background-image: url('{{ Storage::url($item->galleries->first()->image) }}')">
        <div class="display">
            <h3>{{ $item->title }}</h3>
        </div>
    </div>
</div>

<!-- profile Desa -->
<div class="profil">
    <div class="foto-desa"> <img src="{{ Storage::url($item->galleries->first()->image) }}" alt=""></div>
    <div class="desk">
        <h3>Profil {{ $item->title }}</h3>
        <p>{{$item->DeskProfil}}</p>
        <div class="media-social">
              <ul>
                  <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$item->email}}" target="_blank"><i class="fa fa-envelope" aria-hidden="true" id="mail"></i></a></li> 
                  <li><a href="https://www.instagram.com/{{$item->ig}}/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/{{$item->twt}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              </ul>
          </div>
    </div>
</div>
<!-- Peta Desa -->

 <div class="map-section">
    <div class="peta-desa">
  <div class="peta">
    <iframe class="gmaps" src="{{ $item->urlGmaps }}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
    <div class="desk-peta">
      <h3>Peta {{ $item->title }}</h3>
      <p>{{ $item->adress }}</p>
  </div>
</div>
 </div>
@endsection

@push('prepend-style')
  <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/potensi.css?ver=1.1')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush

@push('addon-script')
  <script src="{{url ('frontend/scripts/potensi.js')}}"></script>
@endpush