<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    <style type="text/css">
        .center{
            text-align: center;
        }
        .full{
            width: 100%;
        }
        .wrapper{
            padding-left: 30px;
            padding-right: 30px;
        }
        .mt-1{
            margin-top: 5px;
        }
        .mb-1{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="center full">
        <h3>{{ $title }}</h3><br>
    </div>

    <div class="wrapper">
        <div class="bt-1 bb-1">
            <table class="full mt-1 mb-1">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <th>{{ $pasien->id }}</th>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <th>{{ $pasien->nik }}</th>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <th>{{ $pasien->nama }}</th>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <th>{{ $pasien->jns_kelamin }}</th>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <th>{{ $pasien->tmpt_lahir }}</th>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <th>{{ $pasien->tgl_lahir }}</th>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <th>{{ $pasien->alamat }}</th>
                    </tr>
                    <tr>
                        <td>Jenis Cek</td>
                        <th>{{ $pasien->jns_cek }}</th>
                    </tr>
                    <tr>
                        <td>Hasil</td>
                        <th>{{ $pasien->hasil }}</th>
                    </tr>
                </tbody>    
            </table>
            <img src="data:image/png;base64, {!! $qrcode !!}">
        </div>
    </div>
</body>
</html>