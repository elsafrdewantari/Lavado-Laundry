@extends('layouts.adminlayout')
@section('title', 'Dashboard Admin')

@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 mb-4">
            <!-- Statistik Jumlah Pelanggan -->
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100" style="background-color: #012869; color: #ffffff;">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah Pelanggan</h4>
                        <div class="stats-figure">20</div>
                    </div>
                </div>
            </div>
            <!-- Statistik Pesanan Proses -->
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100" style="background-color: #05A8D6; color: #ffffff;">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Pesanan Proses</h4>
                        <div class="stats-figure">15</div>
                    </div>
                </div>
            </div>
            <!-- Statistik Pesanan Selesai -->
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100" style="background-color: #01C760; color: #ffffff;">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Pesanan Selesai</h4>
                        <div class="stats-figure">5</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabel Saran -->
        <div class="row mt-4">
            <div class="col-12">
                <h5 class="mb-3">Tabel Saran</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-whitek">
                            <tr>
                                <th>Id_saran</th>
                                <th>Waktu</th>
                                <th>Nama</th>
                                <th>Saran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2024-12-01 10:30</td>
                                <td>Maria</td>
                                <td>Tambah fitur pengingat otomatis untuk deadline pesanan.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2024-12-02 14:45</td>
                                <td>Ahmad</td>
                                <td>Desain UI lebih responsif di perangkat mobile.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2024-12-03 09:20</td>
                                <td>Siti</td>
                                <td>Menyediakan opsi untuk pesanan bulk dengan diskon.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection