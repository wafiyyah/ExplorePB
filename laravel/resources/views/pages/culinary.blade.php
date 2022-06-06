@extends('layouts.app')

@section('title')
Kuliner
@endsection

@section('content')
<!-- Jumbotron -->
        <div class="header">
          <div class="jumbotron"  style="background-image: url('frontend/images/mercu pb 1-2.jpg');">
              <div class="display">
                  <h3>Kuliner Khas Pulau Besar</h3>
              </div>
          </div>
      </div>
<!-- kuliner -->
  <div class="container-kuliner">
    <div class="cards-kuliner">
    
    @foreach ($items as $item)
      <div class="card-kuliner">
        <div class="gmb-kuliner">
          <img src="{{ Storage::url($item->image) }}" alt="">
        </div>
        <div class="konten">
          <div class="judul-kuliner">
            <h3>{{$item->title}}</h3>
          </div>
          <div class="desk-kuliner">
            <p>{{$item->about}}.</p>
          </div>
          <div class="bahan">
            <h5>Bahan dasar:</h5>
            <p>{{$item->material}}</p>
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
  <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/kuliner.css')}}">
@endpush