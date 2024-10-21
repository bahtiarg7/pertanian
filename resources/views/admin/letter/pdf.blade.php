<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
            /* Add the following to control page margins */
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px; /* Reduced padding for better fit */
            text-align: left;
            font-size: 9px; /* Adjust font size if needed */
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                    <th>Asal Surat</th>
                    <th>Tanggal Diterima</th>
                    <th>Pengirim</th>
                    <th>Dokumen</th>
                    <th>Disposisi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->no_letter }}</td>
                        <td>{{ $item->date_entry }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->origin }}</td>
                        <td>{{ $item->date_receipt }}</td>
                        <td></td>
                        <td><a  href="{{asset('storage/document/'.$item->document)}}">Dokumen</a></td>
                        <td>
                            @if ($item->letter_disposition)
                            <table class="table table-bordered hidden">
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
                                    @foreach ($item->letter_disposition as $key => $value)
                                    <tr>
                                      <td>{{$key+1}}</td>
                                      <td>{{$value["created_at"]}}</td>
                                      <td>{{$item->user($value["sender_id"])}}</td>
                                      <td>{{$item->user($value["recipient_id"])}}</td>
                                      <td>
                                        {{$item->dateConfirmation($value["id"])}}<br>
                                        @if ($item->confirmation($value["id"]) == "W")
                                        Menunggu
                                        @elseif($item->confirmation($value["id"]) == "A")
                                        Diterima
                                        @elseif($item->confirmation($value["id"]) == "R")
                                        Ditolak
                                        @else
                                        Menunggu
                                        @endif
                                      </td>
                                      <td>
                                        {{$item->disposition($value["disposition_id"]) == 'Default' ? '' : $item->disposition($value["disposition_id"]); }}
                                        {{$item->disposition($value["disposition_id"]) == 'Lainnya' ? $item->other($value["id"]) : ''; }}
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table style="border: none; width: 100%;">
            <tr>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="text-align: right; border: none;">
                    <img src="{{ public_path('template/dist/ttd.png') }}" alt="Signature" width="150">
                </td>
            </tr>
        </table>        
    </div>
</body>
</html>
