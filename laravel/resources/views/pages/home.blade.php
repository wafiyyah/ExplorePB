@extends('layouts.app')

@section('title')
Selamat Datang di Pulau Besar
@endsection

@section('content')
    <!-- slideshow -->
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fader">
            <div class="draker">
                <img  src="frontend/images/mercu pb 1-2.jpg">
            </div>
        </div>
    
        <div class="mySlides fade">
            <div class="draker">
                <img src="frontend/images/batu betumpang.jpg">
            </div>
        </div>
    
        <div class="mySlides fade">
            <div class="draker">
                <img src="frontend/images/mercu pb 3.jpg">
            </div>
        </div> 

         <div class="display">
            <h3>Selamat Datang di Pulau Besar</h3>
            <a href="#potensi" class="button-potensi">Lihat Potensi</a>
         </div>

         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> 

    </div>

<!-- Pilihan desa -->
      <div class="container-panel">
            <div class="desa-panel">
                <div class="heading">
                    <h3>Desa-Desa di Kec. Pulau Besar</h3>
                </div>
                <div class="desa">
                 @foreach  ($items as $item)
                    <div class="thumb">
                        <div class="gambar-desa">
                            <a href="#{{ route ('profile', $item->slug) }}">
                            <img src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}" alt="desa" class="gambar-desa">
                            </a>
                        </div>
                        <div class="nama-desa">
                            <p>{{ $item->title}}</p>
                        </div>
                    </div>
                 @endforeach
                </div>
             </div>
     </div>


    <!-- Panel Potensi -->
<div class="potensi">

    <div class="konten-potensi">
        <h3 id="potensi">Potensi Pulau Besar</h3>
        <div class="cards">
            <div class="card wisata">
              <a href="{{ route('wisata') }}"> <img src="{{url('frontend/images/wisata.png')}}" alt="" style="width:100%"></a>
                <div class="jenis-potensi">
                <h4><b>Wisata</b></h4>
                </div>
            </div>
            
            <div class="card kuliner">
            <a href="{{ route('kuliner') }}"> <img src="{{url('frontend/images/kuliner.png')}}" alt="" style="width:100%"></a>
                <div class="jenis-potensi">
                <h4><b>Kuliner Khas</b></h4>
                </div>
            </div>
            
            <div class="card produk">
             <a href="{{ route('produklokal') }}">  <img src="{{url('frontend/images/produk.png')}}" alt="" style="width:100%"></a>
                <div class="jenis-potensi">
                <h4><b>Produk Lokal</b></h4>
                </div>
            </div>
        
        </div>
    </div>
</div>


<!--   Profil Desa -->
     <div class="Pengenalan-Desa">

        @foreach ($items as $item)
            <div class="biru" id="{{ route ('profile', $item->slug) }}" class="button">
            <div class="foto">
                <img src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}" class="gmb-desa"> 
            </div>
            <div class="desk">
                <h3>{{ $item->title}}</h3>
                     <p
                    style="
                     overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 8; 
                    -webkit-box-orient: vertical;">
                    {{$item->DeskProfil}}
                </p>
                <h5>Profil Desa | Media Sosial Desa | Peta Desa</h5>
                <div class="button-detail">
                    <a href="{{ route ('profile', $item->slug) }}" class="button">Lihat Desa</a>
                </div>
            </div>
        </div>        
        @endforeach

     </div>
@endsection
