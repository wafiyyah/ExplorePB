@extends('layouts.app')
@section('title')
Wisata Pulau Besar
@endsection

@section('content')
<!-- Jumbotron -->
        <div class="header">
          <div class="jumbotron" style="background-image: url('frontend/images/mercu pb 1-2.jpg');">
              <div class="display">
                  <h3>Wisata Pulau Besar</h3>
              </div>
          </div>
      </div>
<!-- Wisata --> 
  <div class="container-wisata">
    <div class="cards-wisata">
    
      @foreach ($items as $item)
      <div class="card-wisata">
        <div class="gmb-wisata">
          <img src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}" alt="">
        </div>
        <div class="konten">
          <div class="judul-wisata">
            <h3>{{ $item->title}}</h3>
          </div>
          <div class="desk-wisata">
            <span
            style="
             overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4; 
            -webkit-box-orient: vertical;">
            {{ $item->about}}
            </span>
          </div>
          <div class="btn">
            <a href="{{ route ('detailwisata', $item->slug) }}" class="btn-detail">Lihat Detail</a>
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
  <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/wisata.css')}}">
@endpush
