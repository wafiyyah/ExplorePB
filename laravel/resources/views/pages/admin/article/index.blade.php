@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Artikel</h1>
             <a href="{{ route('article.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                </a>
        </div>


      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nama Desa</th>
                          <th>Judul</th>
                          <th>Tulisan</th>
                          <th>Penulis</th>
                          <th>Foto</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @forelse($items as $item)
                          <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->village_page->title }}</td>
                              <td>{{ $item->title }}</td>
                               <td>{{ $item->author }}</td>
                              <td class="text-break">{!! Str::limit ($item->post, 150, ' ...') !!}</td>
                              <td>
                                <img src="{{Storage::url($item->image)}}" style="width:150px" class "img-thumbnail"/>
                              </td>
                              <td>
                                  <a href="{{ route('article.edit', $item->id) }}" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="{{ route('article.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                      </tbody>
                  </table>
                  {{$items->links()}}
              </div>
          </div>
      </div>
@endsection
