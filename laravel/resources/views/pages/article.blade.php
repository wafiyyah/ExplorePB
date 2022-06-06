@extends('layouts.app')
@section('title')
{{ $item->title }}
@endsection

@section('content')
  <article>
            <div class="gmb-artikel">
                <img src="{{ Storage::url($item->image) }}" alt="">
            </div>
            <div class="konten-tulisan">
                <div class="judul-artikel">
                    <h3>{{$item->title}}</h3>
                </div>
                <div class="detail-artikel">
                    <h5 class="penulis">{{$item->author}}</h5>
                    <p class="waktu">{{ $item->created_at->diffForHumans()}}</p>
                </div>
                <div class="isi-artikel">
                    <p>{{$item->post}}</p>
                </div>
            </div>
        </article>


@endsection


@push('prepend-style')
  <link rel="stylesheet" href="{{url('../frontend/styles/artikel.css?ver=1.1')}}">
@endpush
