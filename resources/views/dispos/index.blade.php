@extends('layouts.backend.app',[
'title' => ' Dashboard - Distan',
'contentTitle' => ' Dashboard - Distan',
])

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Data Surat</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration" style="min-width: 845px">
              <thead class=" text-primary">
                <th class="text-center">
                  No
                </th>
                <th class="text-center">
                  Hari
                </th>
                <th class="text-center">
                  Tanggal
                </th>
                <th class="text-center">
                  Nomor Surat
                </th>
                <th class="text-center">
                  Dokumen
                </th>
                <th class="text-center">
                  Disposisi
                </th>
                
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach($letter as $us)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-left">{{$us->day}}</td>
                    <td class="text-right">{{$us->date}}</td>
                    <td class="text-left">{{$us->no_letter}}</td>
                    <td class="text-left"><a  href="{{asset('storage/document/'.$us->document)}}">Document</a>
                    </td>
                    
                    <td class="text-center">
                        @if (Auth::user()->hasRole('admin')) 
                        {{$us->disposition_status == 'Y' ? 'Sudah' : 'Belum';}}
                        @endif
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
@endsection