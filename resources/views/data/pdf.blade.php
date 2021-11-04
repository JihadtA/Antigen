<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style type="text/css">
        .center{
            text-align: center;
        }
        .right{
            text-align: right;
        }
        .left{
            text-align: left;
        }
        .full{
            width: 100%;
        }
        .half{
            width : 85%;
        }
        .wrapper{
            padding-left: 30px;
            padding-right: 30px;
        }
        .col-md-{
            column-width: 30px;
            max-container-width: 720px;
        }
        .left-container{
            padding-left: 0px;
            padding-right: 20px;
        }
        .right-container{
            padding-left: 200px;
            padding-right: 15px;
        }
        .underline{
            text-decoration: underline;
        }
        .bt-1{
            border-top: 1px solid black;
        }
        .bb-1{
            border-bottom: 1px solid black;
        }
        .mt-1{
            margin-top: 5px;
        }
        .mb-1{
            margin-top: 5px;
        }
        table tr th,table tr td{
            text-align: left;
        }
        .table-borderless{
            
        }
        .spacer{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <img style="height:60px width: 140px; float:right;" src="img/logo.png">
        <h3 class="left">LAPORAN HASIL LABORATORIUM</h3><br>
    </div>

    <div class="wrapper">
        <div class="bt-1 bb-1">
            <table class="full left-container table table-borderless mt-1 mb-1">
                <tbody>
                <tr>
                    <th>No. Lab</th>
                    <td>{{ $pasien->no_lab }}</td>
                <tr>
                    <th>No. Rekam Medis</th>
                    <td>{{ $pasien->no_rm }}</td>
                <tr>
                    <th>Nama</th>
                    <td>{{ $pasien->nama }}</td>
                    <th>Nama Dokter</th>
                    <td>{{ $pasien->nama_dok }}</td
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $pasien->tgl_lahir }}</td>
                    <th>Lokasi</th>
                    <td>{{ $pasien->lokasi }}</td>
                <tr>
                    <th>Umur</th>
                    <td>{{ $pasien->umur }}</td>
                    <th>No HP</th>
                    <td>{{ $pasien->no_hp }}</td>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pasien->alamat }}</td>
                    <th>Lokasi</th>
                    <td>{{ $pasien->lokasi }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="wrapper">
        <div class="bt-1 bb-1">
            <table class="full table table-borderless mt-1 mb-1">
                <thead>
                    <tr>
                        <th scope="col">PEMERIKSAAN</th>
                        <th scope="col">HASIL</th>
                        <th scope="col">NILAI RUJUKAN</th>
                        <th scope="col">SATUAN</th>
                        <th scope="col">METODE</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="wrapper">
        <div class="bb-1">
            <table class="half table table-borderless mt-1 mb-1">            
                <tbody>
                    <tr>
                        <th><i>IMUNOLOGI</i></th>
                    <tr>
                        <th>PCR SARS-Cov-2</th>
                        <td>{{ $pasien->hasil }}</td>
                        <td>{{ $pasien->nilai_rujukan }}</td>
                        <td>{{ $pasien->satuan }}</td>
                        <td>{{ $pasien->metode }}</td>
                    <tr>
                        <th>Tanggal Tes</th>
                        <td>{{ $pasien->tgl_tes }}</td>
                    <tr>
                        <th>Bahan Tes</th>
                        <td>{{ $pasien->bahan }}</td>
                    </tr>
                <tbody>
            </table>
        </div>
    </div>
    <div class="center full">
        <div class="mt-5">
        <h3>Scan Me!</h3>
        <div class="mt-5">
        <img style="max width: 50px;" src="data:image/png;base64, {!! $qrcode !!}">
    </div>
    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="https://www.halodoc.com/artikel/swab-antigen-dan-rapid-test-antigen-beda-atau-sama">www.antigentest.com</p>
    </footer>
</body>
</html>

{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .center{
            text-align: center;
        }
        .right{
            text-align: right;
        }
        .left{
            text-align: left;
        }
        .full{
            width: 100%;
        }
        .wrapper{
            padding-left: 30px;
            padding-right: 30px;
        }
        .underline{
            text-decoration: underline;
        }
        .bt-1{
            border-top: 1px solid black;
        }
        .bb-1{
            border-bottom: 1px solid black;
        }
        table tr th,table tr td{
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <img style="height:60px width: 140px; float:right;" src="img/logo.png">
        <h3 class="left">Data Pasien Test Antigen</h3><br>
    </div>

    <div class="wrapper">
        <div class="bt-1 bb-1">
            <table class="table table-borderless" id="example">
                <tr>
                    <th>No Laboratory</th>
                    <td>{{ $pasien->no_lab }}</td>
                </tr>
                <tr>
                    <th>No Rekam Medis</th>
                    <td>{{ $pasien->no_rm }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $pasien->nama }}</td>
                </tr>
                <tr>
                    <th>Nama Dokter</th>
                    <td>{{ $pasien->nama_dok }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $pasien->jns_kelamin }}</td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td>{{ $pasien->umur }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $pasien->tgl_lahir }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pasien->alamat }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $pasien->no_hp }}</td>
                </tr>
                <tr>
                    <th>Lokasi</th>
                    <td>{{ $pasien->lokasi }}</td>
                </tr>
                <tr>
                    <th>Tanggal Tes</th>
                    <td>{{ $pasien->tgl_tes }}</td>
                </tr>
                <tr>
                    <th>Bahan Tes</th>
                    <td>{{ $pasien->bahan }}</td>
                </tr>
                <tr>
                    <th>Hasil Tes</th>
                    <td>{{ $pasien->hasil }}</td>
                </tr>
                <tr>
                    <th>Nilai Rujukan</th>
                    <td>{{ $pasien->nilai_rujukan }}</td>
                </tr>
                <tr>
                    <th>Satuan</th>
                    <td>{{ $pasien->satuan }}</td>
                </tr>
                <tr>
                    <th>Metode</th>
                    <td>{{ $pasien->metode }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="center full">
        <div class="mt-5">
        <h3>Scan Me!</h3>
        <div class="mt-5">
        <img style="max width: 50px;" src="data:image/png;base64, {!! $qrcode !!}">
    </div>
    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="https://www.halodoc.com/artikel/swab-antigen-dan-rapid-test-antigen-beda-atau-sama">www.antigentest.com</p>
    </footer>
</body>
</html> --}}