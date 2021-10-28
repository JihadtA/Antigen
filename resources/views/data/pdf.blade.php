<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3>Data Pasien</h3>
    <table class="table table-striped" id="example">
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
                <th>{{ $pasien->jns_kelamin }}</th>
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
</body>
</html>