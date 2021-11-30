@extends('layouts.app')

@section('content')
    {{-- Bagian Head --}}
<div class="container">
    <div class="alert alert-secondary" role="alert"> List Buku </div> 


{{-- Bagian Head Card --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert bg-warning" role="alert">
                            <h4> Data Buku </h4>
                        </div>

                    @if(session('insert-message'))
                        <div class="alert alert-success">{{session('insert-message')}}</div>
                    @elseif(session('update-message'))
                        <div class="alert alert-success">{{session('update-message')}}</div>
                    @elseif(session('delete-message'))
                        <div class="alert alert-success">{{session('delete-message')}}</div>
                    @endif

                    <a type="submit" class="btn btn-primary" href="{{route('books.create')}}"> Tambah stock buku </a>
                    <a class="btn btn-outline-secondary" href="#"> Rekap semua data buku </a>

{{-- Bagian Table --}}
        <div class="pt-3"></div>
            <table class="table table-striped table-hover">


{{-- Bagian Head Table --}}
                <thead>
                    <tr>
                        <th scope="col"> Nama Buku </th>
                        <th scope="col"> Penerbit </th>
                        <th scope="col"> Tanggal Terbit </th>
                        <th scope="col"> Stock </th>
                        <th scope="col"> Action </th>                        
                    </tr>
                </thead>

{{-- Bagian Body Table --}}
                <tbody>
                    <tr>
                        <td> Basis Data </td>
                        <td> Dimas Angga Wijaya </td>
                        <td> 12 September 2018 </td>
                        <td> 9 </td>
                        <td><a type="button" class="btn btn-warning" href="{{route('books.edit')}}"> Edit </a>
                            <a type="button" class="btn btn-danger" href="#"> Delete </a> </td>
                    </tr>

                    <tr>
                        <td> Belajar Bahasa Pemrograman </td>
                        <td> Lina Valentine </td>
                        <td> 23 Agustus 2019 </td>
                        <td> 5 </td>
                        <td><a type="button" class="btn btn-warning" href="{{route('books.edit')}}"> Edit </a>
                            <a type="button" class="btn btn-danger" href="#"> Delete </a> </td>
                    </tr>

                        <tr>
                            <td> Cara Mudah Belajar Coding </td>
                            <td> Ahmad Renaldi </td>
                            <td> 27 Mei 2018 </td>
                            <td> 4 </td>
                            <td><a type="button" class="btn btn-warning" href="{{route('books.edit')}}"> Edit </a>
                                <a type="button" class="btn btn-danger" href="#"> Delete </a> </td>

                        </tr>
                            <td> Cara Mudah Membuat website </td>
                            <td> Sinta Nuraini </td>
                            <td> 25 Januari 2020 </td>
                            <td> 7 </td>
                            <td><a type="button" class="btn btn-warning" href="{{route('books.edit')}}"> Edit </a>
                                <a type="button" class="btn btn-danger" href="#"> Delete </a> </td>  
                    </tbody>

            </table>
{{-- Akhir Table --}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection