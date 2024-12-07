@extends('layouts.adminlayout')
@section('title', 'Dashboard Prosess')

@section('content')
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
@endsection