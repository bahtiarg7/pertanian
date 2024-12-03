@extends('layouts.berita.app', ['title' => 'Berita'])
@section('content')
<div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold mb-0">Berita</h4>
    </div>
    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex justify-content-between">
                <h4 class="card-title mb-0">Berita</h4>
                <a href="{{route('backend.berita.create')}}" class="btn btn-primary">Buat Berita</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header border-bottom border-dashed d-flex align-items-center">
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table id="example" class="table table-nowrap mb-0">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>judul</th>
                                             {{-- <th>Kategori</th> --}}
                                             <th>Status</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($berita as $item )
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->judul }}</td>
                                            {{-- <td>{{ $item->berita->beritaKategori->name }}</td> --}}
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <form action="#" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

            @endsection
