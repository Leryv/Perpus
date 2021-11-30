@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    <div class="alert alert-secondary" role="alert"> Daftar Pengembalian </div> 
        <div class="row">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> Nama Buku </th>
                                    <th scope="col"> Nama Siswa </th>
                                    <th scope="col"> Tanggal Pinjam </th>
                                    <th scope="col"> Tanggal Kembali </th>
                                    <th scope="col"> Durasi Peminjaman </th>    
                                    <th scope="col"> Action </th>                    
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td> Basis Data </td>
                                    <td> Rudi purwanto </td>
                                    <td> 2020-5-3 </td>
                                    <td> 2020-5-17 </td>
                                    <td> Durasi Habis/-15 </td>
                                    <td><a type="button" class="btn btn-outline-primary" href="#"> Kembalikan Buku </a></td>
                                </tr>
            
                                <tr>
                                    <td> Belajar Bahasa Pemrograman </td>
                                    <td> Angga Saputra </td>
                                    <td> 2020-12-17 </td>
                                    <td> 2020-12-27 </td>
                                    <td> Durasi Habis/-12 </td>
                                    <td><a type="button" class="btn btn-outline-primary" href="#"> Kembalikan Buku </a></td>
                                </tr>
            
                                    <tr>
                                        <td> Cara Mudah Belajar Coding </td>
                                        <td> Julia Ayu Dewi </td>
                                        <td> 2020-07-25 </td>
                                        <td> 2020-08-15 </td>
                                        <td> Durasi Habis/-3 </td>
                                        <td><a type="button" class="btn btn-outline-primary" href="#"> Kembalikan Buku </a></td>
                            </tbody>

                        </table>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection