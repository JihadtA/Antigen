<!DOCTYPE html>
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
                    <th>ID</th>
                    <td>{{ $pasien->id }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $pasien->nik }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $pasien->nama }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $pasien->jns_kelamin }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $pasien->tmpt_lahir }}</td>
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
                    <th>Jenis Cek</th>
                    <td>{{ $pasien->jns_cek }}</td>
                </tr>
                <tr>
                    <th>Hasil</th>
                    <td>{{ $pasien->hasil }}</td>
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
</html>