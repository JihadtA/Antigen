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
            width: 110%;
        }
        .half{
            width : 85%;
        }
        .mid{
            width : 100%;
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
            <div class="mt-1">
                <table class="full left-container table table-borderless mt-1 mb-1">
                    <tbody>
                    <tr>
                        <th>No. Lab</th>
                        <td>{{ $pasien->no_lab }}</td>
                    </tr>
                    <tr>
                        <th>No. Rekam Medis</th>
                        <td>{{ $pasien->no_rm }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $pasien->nama }}</td>
                        <th>Nama Dokter</th>
                        <td>{{ $pasien->nama_dok }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $pasien->tgl_lahir }}</td>
                        <th>No HP</th>
                        <td>{{ $pasien->no_hp }}</td>
                    </tr>
                    <tr>
                        <th>Umur</th>
                        <td>{{ $pasien->umur }}</td>
                        <th>Tanggal Transaksi</th>
                        <td>{{ $pasien->updated_at }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $pasien->alamat }}</td>
                        <th>Hasil Selesai</th>
                        <td>{{ $pasien->updated_at }}</td>
                    </tr>
                    <tr>
                        <th>Lokasi</th>
                        <td>{{ $pasien->lokasi }}</td>
                        <th>Tanggal Cetak</th>
                        <td><?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d  H:i:s");?></td> 
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="wrapper mt-2">
        <div class="bt-1 bb-1">
            <div class="mt-1">
                <table class="mid table table-borderless mt-1 mb-1">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align:center;">PEMERIKSAAN</th>
                            <th scope="col" style="text-align:center;">HASIL</th>
                            <th scope="col" style="text-align:center;">Ig M</th>
                            <th scope="col" style="text-align:center;">Ig G</th>
                            <th scope="col" style="text-align:center;">METODE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td style="border-top:solid"><i><b>IMUNOLOGI</b></i></td>
                            <td style="border-top:solid"></td>
                            <td style="border-top:solid"></td>
                            <td style="border-top:solid"></td>
                            <td style="border-top:solid"></td>
                        <tr>
                            <td><b>PCR SARS-Cov-2</b></td>
                            <td>{{ $pasien->hasil }}</td>
                            <td style="text-align:center;">{{ $pasien->igm }}</td>
                            <td style="text-align:center;">{{ $pasien->igg }}</td>
                            <td style="text-align:center;">{{ $pasien->metode }}</td>
                        <tr>
                            <td><b>Tanggal Tes</b></td>
                            <td>{{ $pasien->tgl_tes }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <tr>
                            <td><b>Bahan Tes</b></td>
                            <td>{{ $pasien->bahan }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="center mid">
        <div class="mt-5">
        <h3>Scan Me!</h3>
        <div class="mt-5">
        <img style="width: 3cm height: 3cm;" src="data:image/png;base64, {!! $qrcode !!}">
    </div>
    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="http://127.0.0.1:8000/profile">www.antigentest.com</p>
    </footer>
</body>
</html>