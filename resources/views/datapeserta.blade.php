@extends('layouts.master')
@section('breadcrumb')

@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ $title }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <a>Data</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>{{ $title }}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Tabel {{ $title }}</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped" style="width: 100%">
                            <thead>
                                <tr> 
                                    <th>AKTIVA</th>
                                    <th>2019</th>
                                    <th>2020</th>
                                    <th>+/-(%)</th>
                                    
                                    <th>PASSIVA</th>
                                    <th>2019</th>
                                    <th>2020</th>
                                    <th>+/-(%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td colspan="4"><b>AKTIVA LANCAR</b></td>
                                        <td colspan="4"><b>KEWAJIBAN LANCAR</b></td>
                                    </tr>
                                    
                                        <tr>
                                            <td><b>KAS</b></td>
                                            <td><b>6.671.931</b></td>
                                            <td><b>34.993.503</b></td>
                                            <td><b>424,49%</b></td>
    
                                            <td><b>HUTANG LANCAR</b></td>
                                            <td><b>1.115.694.486</b></td>
                                            <td><b>1.129.822.240</b></td>
                                            <td><b>3,72%</b></td>
                                        </tr>

                                        <tr>
                                            <td>Kas & Setara Kas - Bendahara</td>
                                            <td>2.97352</td>
                                            <td>23.515.573</td>
                                            <td>690,08%</td>
    
                                            <td>Hutang Dagang</td>
                                            <td>4.756.253</td>
                                            <td>14.100.490</td>
                                            <td>196,48%</td>
                                        </tr>

                                        <tr>
                                            <td>Kas & Setara Kas - Toko</td>
                                            <td>300.000</td>
                                            <td>0</td>
                                            <td>-100,00%</td>
    
                                            <td>Hutang Lain - Lain</td>
                                            <td>210.909.488</td>
                                            <td>128.621.826</td>
                                            <td>-39,02%</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Kas & Setara Kas - Sie Usaha</td>
                                            <td>3.395.579</td>
                                            <td>11.477.930</td>
                                            <td>238,03%</td>
    
                                            <td>Hutang Pajak</td>
                                            <td>4.548.893</td>
                                            <td>3.659.652</td>
                                            <td>-19,55%</td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>
    
                                            <td>Titipan Pelunasan Hutang</td>
                                            <td colspan="2"></td>
                                            <td>0,00%</td>
                                        </tr>
                                        
                                        <tr>
                                            <td><b>BANK</b></td>
                                            <td><b>806.335.373</b></td>
                                            <td><b>3.481.542.826</b></td>
                                            <td><b>331,77%</b></td>
    
                                            <td>Simpanan Sukarela</td>
                                            <td>901.916.402</td>
                                            <td>997.540.761</td>
                                            <td>10,60%</td>
                                        </tr>

                                        <tr>
                                            <td>Rekening di Bank BCA - Simpan Pinjam</td>
                                            <td>574.926.806</td>
                                            <td>695.654.335</td>
                                            <td>21,00%</td>
    
                                            <td>Dana Pendidikan</td>
                                            <td>65.894.703</td>
                                            <td>74.539.211</td>
                                            <td>13,12%</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Rekening di Bank BCA - Toko</td>
                                            <td>29.578.641</td>
                                            <td>51.785.585</td>
                                            <td>75,08%</td>
    
                                            <td>Dana Sosial</td>
                                            <td>48.890.523</td>
                                            <td>57.535.031</td>
                                            <td>17,68%</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Rekening di Bank BTN Syariah - Yogyakarta</td>
                                            <td>198.267</td>
                                            <td>198.267</td>
                                            <td>0,00%</td>
    
                                            <td>Dana Pembangunan</td>
                                            <td>47.251.034</td>
                                            <td>55.905.542</td>
                                            <td>18,29%</td>
                                        </tr>

                                        <tr>
                                            <td>Rekening di Bank BTN Syariah - Semarang</td>
                                            <td>51.631.658</td>
                                            <td>78.690.852</td>
                                            <td>52,41%</td>
    
                                            <td colspan="4"></td>
                                        </tr>

                                        <tr>
                                            <td>Rekening di Bank BTN Semarang</td>
                                            <td>0</td>
                                            <td>5.213.788</td>
                                            <td>0,00%</td>
    
                                            <td><b>KEWAJIBAN JANGKA PANJANG</b></td>
                                            <td colspan="3"></td>
                                        </tr>

                                        <tr>
                                            <td>Deposito</td>
                                            <td>150.000.000</td>
                                            <td>2.650.000.000</td>
                                            <td>1666,67%</td>

                                            <td><b>HUTANG JANGKA PANJANG</b></td>
                                            <td><b>3.683.838.512</b></td>
                                            <td><b>4.196.367.824</b></td>
                                            <td><b>13,91%</b></td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>

                                            <td colspan="3">Hutang Bank</td>
                                            <td>0,00%</td>
                                        </tr>

                                        <tr>
                                            <td><b>PIUTANG</b></td>
                                            <td><b>7.814.673.039</b></td>
                                            <td><b>5.912.148.621</b></td>
                                            <td><b>-24,35%</b></td>

                                            <td>Simpanan Pensiun</td>
                                            <td>3.683.838.512</td>
                                            <td>4.196.367.824</td>
                                            <td>13,91%</td>
                                        </tr>

                                        <tr>
                                            <td>Piutang Pinjaman di Bank BTN Syariah - Yogyakarta</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0,00%</td>
    
                                            <td colspan="4"></td>
                                        </tr>

                                        <tr>
                                            <td>Piutang Pinjaman Uang</td>
                                            <td>7.56.496.088</td>
                                            <td>5.220.222.602</td>
                                            <td>-26,02%</td>

                                            <td colspan="4"><b>MODAL SENDIRI</b></td>
                                        </tr>

                                        <tr>
                                            <td>Piutang Pinjaman Barang</td>
                                            <td>29.985.300</td>
                                            <td>35.006.900</td>
                                            <td>16,75%</td>

                                            <td><b>MODAL KOPERASI</b></td>
                                            <td><b>3.266.597.612</b></td>
                                            <td><b>3.490.956.423</b></td>
                                            <td><b>6,87%</b></td>
                                        </tr>

                                        <tr>
                                            <td>Piutang Toko</td>
                                            <td>23.319.900</td>
                                            <td>28.160.700</td>
                                            <td>20,76%</td>
    
                                            <td>Donasi</td>
                                            <td>70.058.671</td>
                                            <td>70.058.671</td>
                                            <td>0,00%</td>
                                        </tr>

                                        <tr>
                                            <td>Potongan Koperasi yang belum diterima</td>
                                            <td>608.057.017</td>
                                            <td>57.100.541</td>
                                            <td>-5,09%</td>
    
                                            <td>Cadangan Resiko</td>
                                            <td>476.223.941</td>
                                            <td>541.057.752</td>
                                            <td>13,61%</td>
                                        </tr>

                                        <tr>
                                            <td>Piutang Lain-Lain</td>
                                            <td>6132.097.214</td>
                                            <td>77.758.991</td>
                                            <td>-41.14%</td>
    
                                            <td>Modal Disetor</td>
                                            <td>27.890.000</td>
                                            <td>27.940.000</td>
                                            <td>0,18%</td>
                                        </tr>

                                        <tr>
                                            <td>Cadangan Piutang tak Tertagih</td>
                                            <td style="color: red">-35.282.480</td>
                                            <td style="color: red">-26.101.113</td>
                                            <td>-26,02%</td>
        
                                            <td>Modal Tetap Tambahan</td>
                                            <td>2.692.425.000</td>
                                            <td>2.851.900.000</td>
                                            <td>5,92%</td>
                                        </tr>

                                        <tr>
                                            <td><b>PERSEDIAAN</b></td>
                                            <td><b>37.583.487</b></td>
                                            <td><b>35.079.146</b></td>
                                            <td><b>-6,66%</b></td>

                                            <td colspan="4"></td>
                                        </tr>

                                        <tr>
                                            <td>Persediaan Barang Toko</td>
                                            <td>37.583.487</td>
                                            <td>35.079.146</td>
                                            <td>-6,66%</td>

                                            <td><b>SISA HASIL USAHA</b></td>
                                            <td><b>432.225.408</b></td>
                                            <td><b>445.436.334</b></td>
                                            <td><b>3,06%</b></td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>

                                            <td>SHU Tahun Belanja</td>
                                            <td>432.225.408</td>
                                            <td>445.436.334</td>
                                            <td>3,06%</td>
                                        </tr>

                                        <tr>
                                            <td><b>AKTIVA TETAP</b></td>
                                            <td><b>1.575.000</b></td>
                                            <td><b>900.000</b></td>
                                            <td><b>-42,86%</b></td>

                                            <td colspan="4"></td>
                                        </tr>

                                        <tr>
                                            <td>Aktiva Tetap</td>
                                            <td>141.693.500</td>
                                            <td>141.693.500</td>
                                            <td>0,00%</td>

                                            <td colspan="4"></td>
                                        </tr>

                                        <tr>
                                            <td>Akumulasi Depresoaso Aktiva Tetap</td>
                                            <td style="color: red">-140.118.500</td>
                                            <td style="color: red">-140.793.500</td>
                                            <td>0,48%</td>

                                            <td colspan="4"></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><b>8.666.838.830</b></td>
                                            <td><b>9.464.664.097</b></td>
                                            <td><b>9,21%</b></td>

                                            <td></td>
                                            <td><b>8.666.838.830</b></td>
                                            <td><b>9.464.664.097</b></td>
                                            <td><b>9,21%</b></td>
                                        </tr>

                            </tbody>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection