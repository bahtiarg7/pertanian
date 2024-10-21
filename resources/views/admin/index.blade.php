@extends('layouts.backend.app',[
'title' => ' Dashboard - Distan',
'contentTitle' => ' Dashboard - Distan',
])

@section('content')
<style>
  .form-check-input:checked ~ .form-check-label {
    background-color: #007bff; /* Warna latar belakang ketika terpilih */
    color: #fff; /* Warna teks ketika terpilih */
    padding: 0.375rem 0.75rem;
    border-radius: 0.25rem;
  }
  .form-check-label {
    display: block; /* Membuat label tampil sebagai blok sehingga latar belakangnya terlihat */
  }
  .form-check-input {
    width: auto; /* Agar checkbox tidak terlalu lebar */
  }
  </style>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Data Surat {{ucfirst(Auth::user()->role)}}</h4>
          @can('admin')
          <a href="pdf-surat" class="btn btn-primary">PDF</a>
          <a href="excel-surat" class="btn btn-primary">EXCEL</a>
          @endcan
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration" style="min-width: 845px">
              <thead class=" text-primary">
                <th class="text-center">No</th>
                <th class="text-center">No Surat</th>
                <th class="text-center">Tanggal Surat</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">Asal Surat</th>
                <th class="text-center">Tanggal Diterima</th>
                <th class="text-center">Pengirim</th>
                <th class="text-center">Dokumen</th>
                <th class="text-center">Disposisi</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Aksi</th>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp

                @if (Auth::user()->role == 'admin')
                @foreach($letter as $us)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-left">{{$us->no_letter}}</td>
                    <td class="text-right">{{$us->date_entry}}</td>
                    <td class="text-left">{{$us->subject}}</td>
                    <td class="text-left">{{$us->origin}}</td>
                    <td class="text-right">{{$us->date_receipt}}</td>
                    <td class="text-left">Administrator</td>
                    <td class="text-left"><a  href="{{asset('storage/document/'.$us->document)}}"><i class="fa fa-file-o" style="font-size:24pt"></i></a>
                    </td>
                   
                    <td class="text-center"> 
                      {{$us->disposition_status == 'Y' ? 'Sudah' : 'Belum';}}<br>
                      @if ($us->letter_disposition)
                        <style>
                          /* Kelas CSS khusus jika tidak menggunakan Bootstrap */
                          .hidden {
                              display: none;
                          }
                        </style>
                          <button id="toggleButton{{$no}}" class="btn btn-primary">Tampilkan</button>
                          <table id="dataTable{{$no}}" class="table table-bordered hidden">
                            <thead>
                              <tr>
                                <td>No</td>
                                <td>Tanggal Disposisi</td>
                                <td>Pengirim</td>
                                <td>Nama</td>
                                <td>Status</td>
                                <td>Keterangan</td>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($us->letter_disposition as $key => $item)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item["created_at"]}}</td>
                                <td>{{$us->user($item["sender_id"])}}</td>
                                <td>{{$us->user($item["recipient_id"])}}</td>
                                <td>
                                  {{$us->dateConfirmation($item["id"])}}<br>
                                  @if ($us->confirmation($item["id"]) == "W")
                                  Menunggu
                                  @elseif($us->confirmation($item["id"]) == "A")
                                  Diterima
                                  @elseif($us->confirmation($item["id"]) == "R")
                                  Ditolak
                                  @else
                                  Menunggu
                                  @endif
                                </td>
                                <td>
                                  {{$us->disposition($item["disposition_id"]) == 'Default' ? '' : $us->disposition($item["disposition_id"]); }}
                                  {{$us->disposition($item["disposition_id"]) == 'Lainnya' ? $us->other($item["id"]) : ''; }}
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <script>
                            document.getElementById('toggleButton{{$no}}').addEventListener('click', function() {
                                var table = document.getElementById('dataTable{{$no}}');
                                if (table.classList.contains('hidden')) {
                                    table.classList.remove('hidden');
                                    this.textContent = 'Sembunyikan'; // Ubah teks tombol saat tabel ditampilkan
                                } else {
                                    table.classList.add('hidden');
                                    this.textContent = 'Tampilkan'; // Ubah teks tombol saat tabel disembunyikan
                                }
                            });
                        </script>
                      @endif
                    </td>
                    <td>
                      {{$item->disposition($item->disposition_id)}}<br>
                      @if ($item->disposition_id == 5)
                      {{$item->description}}
                      @endif
                    </td>
                    <td>
                        @can('admin')
                        <div class="">
                          <form method=""
                              action="{{ route('letter.destroy',$us->id) }}">
                              <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="icon-trash "></i>Hapus</button>
                          </form>
                        </div>
                        @endcan
                    </td>
                </tr>
                @endforeach
                @endif

                @foreach ($letter_disposition as $item)
                <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td class="text-left">{{$item->no_letter}}</td>
                <td class="text-right">{{$item->date_entry}}</td>
                <td class="text-left">{{$item->subject}}</td>
                <td class="text-left">{{$item->origin}}</td>
                <td class="text-right">{{$item->date_receipt}}</td>
                <td class="text-left">{{$item->user->name}}</td>
                <td class="text-left">
                  @if ($item->confirmation($item->id) == 'A')
                  <a  href="{{asset('storage/document/'.$item->document)}}"><i class="fa fa-file-o" style="font-size:24pt"></i>
                  @else
                  @if ($item->confirmation($item->id) == 'W')
                  Belum Diterima
                  @elseif ($item->confirmation($item->id) == 'R')
                  
                  @endif
                  @endif
                </a>
                </td>
               
                <td class="text-center"> 
                  {{$item->disposition_status == 'Y' ? 'Sudah' : 'Belum';}}
                </td>
                <td>
                  {{$item->disposition($item->disposition_id)}}<br>
                  @if ($item->disposition_id == 5)
                  {{$item->description}}
                  @endif
                </td>
                <td>
                  @if ($item->confirmation($item->id) == 'W')
                  <div class="">
                    <form method=""
                        action="{{ route('letter.terima',$item->id) }}">

                        <button onclick="return confirm('Apakah diterima ?')" type="submit"
                            class="btn btn-primary btn-sm ml-2"><i
                                class="icon-trash "></i>Terima</button>
                    </form>
                  </div>
                  <div class="">
                    <form method=""
                        action="{{ route('letter.tolak',$item->id) }}">

                        <button onclick="return confirm('Apakah ditolak ?')" type="submit"
                            class="btn btn-danger btn-sm ml-2"><i
                                class="icon-trash "></i>Tolak</button>
                    </form>
                  </div>
                  @else
                  @if ($item->confirmation($item->id) == 'A')
                  Diterima<br>

                  @can('sekdin')
                  @if ($item->senderDisposition($item->letter_id) == "")
                  <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{$item->letter_id}}">
                    DISPOSISI
                  </button>
                  @endif
                  @endcan

                  @can('kadin')
                  @if ($item->senderDisposition($item->letter_id) == "")
                  <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{$item->letter_id}}">
                    DISPOSISI
                  </button>
                  @endif
                  @endcan

                  @elseif($item->confirmation($item->id) == 'R')
                  Ditolak
                  @else
                  <div class="">
                    <form method=""
                        action="{{ route('letter.terima',$item->id) }}">

                        <button onclick="return confirm('Apakah diterima ?')" type="submit"
                            class="btn btn-primary btn-sm ml-2"><i
                                class="icon-trash "></i>Terima</button>
                    </form>
                  </div>
                  <div class="">
                    <form method=""
                        action="{{ route('letter.tolak',$item->id) }}">

                        <button onclick="return confirm('Apakah ditolak ?')" type="submit"
                            class="btn btn-danger btn-sm ml-2"><i
                                class="icon-trash "></i>Tolak</button>
                    </form>
                  </div>
                  @endif
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

<!-- The Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Disposisi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('disposisi') }}" method="post">
          @csrf
          <input type="hidden" id="surat" name="surat" class="form-control">
          <div class="form-group">
            <label class="font-weight-bold">Pilih Pengguna</label>
            <div class="row">
              @foreach ($user as $key => $item)
              @if (Auth::user()->role == 'sekdin')
              @if ($item->name != 'Sekretaris Dinas')
              <div class="col-12 mb-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="user[]" id="user-{{$key}}" value="{{$item->id}}">
                  <label class="form-check-label" for="user-{{$key}}">{{$item->name}}</label>
                </div>
              </div>
              @endif
              @else
              <div class="col-12 mb-2">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="user[]" id="user-{{$key}}" value="{{$item->id}}">
                  <label class="form-check-label" for="user-{{$key}}">{{$item->name}}</label>
                </div>
              </div>
              @endif
              @endforeach
            </div>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Pilih Disposisi</label>
            <select name="disposisi" id="disposisi" class="form-control" onchange="toggleKeterangan()" required>
              <option value="">Pilih Disposisi</option>
              @foreach ($disposition as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group" id="keterangan-group" style="display: none">
            <label for="keterangan" class="font-weight-bold">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-success">Kirim</button>
        </form>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  // jQuery for handling modal
  $('#exampleModal').on('show.bs.modal', function (event) {
    // Get the button that triggered the modal
    var button = $(event.relatedTarget);
    // Extract info from data-* attributes
    var id = button.data('id');
    // Update the modal's content
    var modal = $(this);
    modal.find('#surat').val(id);
  });

  function toggleKeterangan() {
    var disposisi = document.getElementById('disposisi').value;
    var keteranganGroup = document.getElementById('keterangan-group');
    var keteranganInput = document.getElementById('keterangan');
    if (disposisi === '5') {
      keteranganGroup.style.display = 'block';
      keteranganInput.setAttribute('required', 'required');
    } else {
      keteranganGroup.style.display = 'none';
      keteranganInput.removeAttribute('required');
    }
  }
</script>

@endsection