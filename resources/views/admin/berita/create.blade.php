@extends('layouts.berita.app', ['title' => 'Tambah Berita'])
@section('content')

<div class="page-container">
    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold mb-0">Tambah Berita</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Berita</a></li>
                <li class="breadcrumb-item active">Tambah Berita</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Tambah Berita</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('backend.berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="judul" class="form-label @error('judul') is-invalid @enderror">Judul</label>
                                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" required>
                                    @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" required readonly>
                                    @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label for="slider" class="form-label @error('slider') is-invalid @enderror">Slider</label>
                                    <select name="slider" class="form-control @error('slider') is-invalid @enderror" id="slider" required>
                                        <option value="">Pilih Slider</option>
                                        <option value="Y">Ya</option>
                                        <option value="N">Tidak</option>
                                    </select>
                                    @error('slider')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>


                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="berita_kategori_id" class="form-label @error('berita_kategori_id') is-invalid @enderror">Kategori Berita</label>
                                    <select name="berita_kategori_id" class="form-control @error('berita_kategori_id') is-invalid @enderror" id="berita_kategori_id" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($beritaKategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('berita_kategori_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label @error('status') is-invalid @enderror">status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="silder" required>
                                        <option value="">Pilih status</option>
                                        <option value="publish">Publish</option>
                                        <option value="unpublish">Unpublish</option>
                                    </select>
                                    @error('slider')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar</label>
                                    <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" accept="image/*" required>
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5" required></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('berita/js/pages/form-fileupload.js') }}"></script>
<script src="{{ asset('berita/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('berita/js/pages/form-quilljs.js') }}"></script>

<script>

    $('#judul').on('input', function() {
        let title = $(this).val();
        if (title.length > 0) {

            $.ajax({
                url: '{{ route('backend.berita.generate-slug') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    judul: title
                },
                success: function(response) {
                    if (response.slug) {
                        $('#slug').val(response.slug);
                    }
                }
            });
        }
    });
</script>
@endpush
