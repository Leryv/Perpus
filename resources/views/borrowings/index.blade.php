@extends('layouts.app')
@section('content')
@csrf

<div class="container">
    <div class="alert alert-secondary" role="alert"> Data Peminjaman Buku </div> 
        <div class="row">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <form>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label"> Dari Tanggal </label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yy">
                                    </div>

                                    <div class="col">                                
                                        <label for="" class="form-label"> Sampai Tanggal </label>
                                        <input type="date" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                    <a class="btn btn-secondary" href="#"> Rekap seluruh Laporan </a>
                                    </div>
                                
                                <div class="">
                                    <div class="col">
                                    <a class="btn btn-info" href="#"> Cari Laporan </a>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="pt-3"></div>
                        <table class="table table-striped">
            
            
            {{-- Bagian Head Table --}}
                            <thead>
                                <tr>
                                    <th scope="col"> Nama Buku </th>
                                    <th scope="col"> Nama Siswa </th>
                                    <th scope="col"> Tanggal Pinjam </th>
                                    <th scope="col"> Tanggal Kembali </th>
                                    <th scope="col"> Durasi Peminjaman </th>    
                                    <th scope="col"> Denda </th>                    
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td> Basis Data </td>
                                    <td> Rudi purwanto </td>
                                    <td> 2020-5-3 </td>
                                    <td> 2020-5-17 </td>
                                    <td> Durasi Habis/-15 </td>
                                    <td><a type="button" class="btn btn-danger" href="#"> Kembalikan Buku </a></td>
                                </tr>
            
                                <tr>
                                    <td> Belajar Bahasa Pemrograman </td>
                                    <td> Angga Saputra </td>
                                    <td> 2020-12-17 </td>
                                    <td> 2020-12-27 </td>
                                    <td> Durasi Habis/-12 </td>
                                    <td><a type="button" class="btn btn-danger" href="#"> Kembalikan Buku </a></td>
                                </tr>
            
                                    <tr>
                                        <td> Cara Mudah Belajar Coding </td>
                                        <td> Julia Ayu Dewi </td>
                                        <td> 2020-07-25 </td>
                                        <td> 2020-08-15 </td>
                                        <td> Durasi Habis/-3 </td>
                                        <td><a type="button" class="btn btn-danger" href="#"> Kembalikan Buku </a></td>
                            </tbody>
                        </table>
            {{-- Akhir Table --}}
            
                    </div>
                </div>
            </div>
        </div>
</div>



@endsection