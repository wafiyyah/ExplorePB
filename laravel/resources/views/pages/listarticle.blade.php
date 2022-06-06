@extends('layouts.app')

@section('title')
Artikel Pulau Besar
@endsection

@section('content')
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
   @foreach ($items as $item)
      <div class="mySlides fade">
      <a href="{{ route ('artikel', $item->slug) }}"><img src="{{ Storage::url($item->image) }}"></a>
        <div class="text">{{$item->title}}</div>
      </div>
    @endforeach
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
 
 <div class="container-artikel">
    
    <div class="header">
      <h1>Artikel Seputar Pulau Besar</h1>
    </div>

    <div class="cards-artikel">
    
    @foreach ($items as $item)
      <div class="card-artikel">
        <div class="gmb-artikel">
          <img src="{{ Storage::url($item->image) }}" alt="">
        </div>
        <div class="konten">
          <div class="judul-artikel">
            <h3>{{$item->title}}</h3>
          </div>
          <div class="nama-penulis">
            <p>{{$item->author}}</p>
          </div>
          <div class="waktu-publish">
            <p>{{ $item->created_at->diffForHumans()}}</p>
          </div>
          <div class="desk-singkat">
            <span
            style="
             overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; 
            -webkit-box-orient: vertical;">
            {{ $item->post}}
            </span>
          </div>
          <div class="btn">
            <a href="{{ route ('artikel', $item->slug) }}" class="btn-detail">Baca</a>
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
  <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/daftarArtikel.css?ver=1.1')}}">
@endpush

@push('addon-script')
  <script src="daftar-artikel.js"></script>
@endpush