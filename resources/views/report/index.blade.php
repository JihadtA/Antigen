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
            Report
        </li>
        <!-- <li class="breadcrumb-item active">
            <strong>Pasien</strong>
        </li> -->
    </ol>
@endsection
@section('content')

<!-- Bar Chart -->
<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Bar Chart</h3>
    </div>
    <canvas id="myChart" width="400" height="400">
        <script>
            $(function () {
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            });
        </script>
    </canvas>
</div>
@endsection