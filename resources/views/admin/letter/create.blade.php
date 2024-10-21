@extends('layouts.backend.app',[
'title' => 'Upload Surat ',
'contentTitle' => 'Upload Surat ',
])

@section('content')

<div class="content-body" style="margin-top:100px;">
    <div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Upload Surat </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Surat  - Table</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('index') }}" class="btn btn-primary btn-sm">Kembali
                            </a>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('letter.store') }}">
                        <div class="card-body col-4">
                            @csrf
                            <div id="form-group">
                                <label for="no_letter">No Surat</label>
                                <input required="" name="no_letter" id="no_letter" class="form-control"></input>
                                @error('no_letter','error')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                            <div id="form-group">
                                <label for="date_entry">Tanggal Surat</label>
                                <input type="date" required="" name="date_entry" id="date_entry" class="form-control"></input>
                                @error('date_entry','error')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                            <div id="form-group">
                                <label for="subject">Perihal</label>
                                <input required="" name="subject" id="subject" class="form-control"></input>
                                @error('subject','error')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                            <div id="form-group">
                                <label for="origin">Asal Surat</label>
                                <input required="" name="origin" id="origin" class="form-control"></input>
                                @error('origin','error')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                            <div id="form-group">
                                <label for="date_receipt">Tanggal Diterima</label>
                                <input type="date" required="" name="date_receipt" id="date_receipt" class="form-control"></input>
                                @error('day','error')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Dokumen </label>
                                    <input type="file" name="document" id="document" class="form-control" data-height="190" data-allowed-file-extensions="pdf xlxs doc docx" required>
                                    @error('document','error')
                                    <div>{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">UPLOAD</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection