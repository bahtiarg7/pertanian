@extends('layouts.berita.app', ['title' => 'Setting'])
@section('content')
<div class="page-container">
    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold mb-0">Setting</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Setting Website</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('backend.setting.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nama Website</label>
                                    <input type="text" name="nama_website" class="form-control @error('nama_website') is-invalid @enderror" id="nama_website" value="{{ old('nama_website', optional($setting)->nama_website) }}">
                                    @error('nama_website')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Seo Description</label>
                                    <input type="text" name="seo_description" class="form-control @error('seo_description') is-invalid @enderror" value="{{ old('seo_description', optional($setting)->seo_description) }}">
                                    @error('seo_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Seo Keywords</label>
                                    <input type="text" name="seo_keyword" class="form-control @error('seo_keyword') is-invalid @enderror" value="{{ old('seo_keyword', optional($setting)->seo_keyword) }}">
                                    @error('seo_keyword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Seo Author</label>
                                    <input type="text" name="seo_author" class="form-control @error('seo_author') is-invalid @enderror" value="{{ old('seo_author', optional($setting)->seo_author) }}">
                                    @error('seo_author')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="logo" class="form-label @error('logo') is-invalid @enderror">Logo</label>
                                    <input name="logo" type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" accept="image/*">
                                    @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if (optional($setting)->logo)
                                    <div class="mt-2">
                                        <img src="{{ asset('upload/setting/' . $setting->logo) }}" alt="Logo" style="max-width: 100px;">
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="favicon" class="form-label @error('favicon') is-invalid @enderror">Favicon</label>
                                    <input name="favicon" type="file" class="form-control @error('favicon') is-invalid @enderror" id="favicon" accept="image/*">
                                    @error('favicon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if (optional($setting)->favicon)
                                    <div class="mt-2">
                                        <img src="{{ asset('upload/setting/' . $setting->favicon) }}" alt="Favicon" style="max-width: 50px;">
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="footer" class="form-label @error('footer') is-invalid @enderror">Footer</label>
                                    <input name="footer" type="text" class="form-control @error('footer') is-invalid @enderror" id="footer" value="{{ old('footer', optional($setting)->footer) }}">
                                    @error('footer')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
