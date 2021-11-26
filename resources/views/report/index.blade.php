@extends('layouts.master')
@section('breadcrumb')
    <style type="text/css">
    .ml-1{
            margin-top: 20px;
        }
    .mid{
            width : 75%;
        }
    </style>

    <h2>Grafik Hasil Tes</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            {{ $title }}
        </li>
        <!-- <li class="breadcrumb-item active">
            <strong>Pasien</strong>
        </li> -->
    </ol>
@endsection

@section('content')
<!-- <script>
    var nov = JSON.parse('{!! json_encode($nov, true) !!}');
</script> -->
<figure class="highcharts-figure">
  <div id="container"></div>
</figure>
@endsection

@push('stylesheets')
<link href="{{ asset('reporrt/template.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Tes Antigen Pasien Perbulan'
        },
        // subtitle: {
        //     text: 'Source: WorldClimate.com'
        // },
        xAxis: {
            categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
            text: 'Jumlah Pasien'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            // pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            // '<td style="padding:0"><b>{point.y:.1f} pasien</b></td></tr>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.f} pasien</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
            pointPadding: 0.2,
            borderWidth: 0
            }
        },
        series: [
        {
            name: 'Pasien',
            data: [{{ $jan }}, {{ $feb }}, {{ $mar }}, {{ $apr }}, {{ $mei }}, {{ $jun }}, {{ $jul }}, {{ $ags }}, {{ $sep }}, {{ $okt }}, {{ $nov }}, {{ $des }}]
        },
        ]
        });
</script>
@endpush
