@extends('layouts.berita.app', ['title' => 'Silder'])
@section('content')
<div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold mb-0">Silder</h4>
    </div>
    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
            <li class="breadcrumb-item active">Silder</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex justify-content-between">
                <h4 class="card-title mb-0">Silder</h4>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSilderModal">Buat Silder</a>
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
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($silder as $silder)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $silder->title }}</td>
                                            <td>{{ $silder->deskripsi }}</td>
                                            <td><img src="{{ asset('upload/silder/'.$silder->image) }}" width="100" alt=""></td>
                                            <td>
                                                <div>
                                                    <!-- Tombol Toggle untuk Aktif/Tidak Aktif -->
                                                    <input type="checkbox"
                                                           class="status-toggle"
                                                           id="switch{{ $silder->id }}"
                                                           data-id="{{ $silder->id }}"
                                                           {{ $silder->is_active ? 'checked' : '' }}
                                                           data-switch="success" />
                                                    <label for="switch{{ $silder->id }}" data-on-label="Active" data-off-label="Inactive" class="mb-0 d-block"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
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
<div class="modal fade" id="createSilderModal" tabindex="-1" aria-labelledby="createSilderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createSilderModalLabel">Create New Silder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.silder.store') }}" method="POST" id="createSilderForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" required></textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" required>
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        // Ketika checkbox status diubah
        $('.status-toggle').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;  // Jika centang, status 1 (aktif), jika tidak centang, status 0 (tidak aktif)
            var silder_id = $(this).data('id');  // Ambil ID dari data-id yang ada di checkbox

            // Kirim AJAX request untuk mengubah status
            $.ajax({
                url: "{{ route('silder.updateStatus') }}",
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'id': silder_id,
                    'is_active': status
                },
                success: function(response) {
                    if(response.success) {
                        if(status == 1) {
                            alert('Status diubah menjadi Aktif');
                        } else {
                            alert('Status diubah menjadi Tidak Aktif');
                        }
                    } else {
                        alert('Terjadi kesalahan, coba lagi!');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Terjadi kesalahan. ' + error);
                }
            });
        });
    });
</script>

@endpush
