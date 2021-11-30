@extends('layouts.app')

@section('content')
    {{-- Bagian Head --}}
<div class="container">
    <div class="alert alert-secondary" role="alert"> Data Buku</div> 


{{-- Bagian Head Card --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-warning" role="alert"> Silahkan pilih kartu anggota yang ingin dicetak kartunya terima kasih </div> 

{{-- Bagian Table --}}
        <div class="pt-3"></div>
            <table class="table table-striped">

{{-- Bagian Head Table --}}
                <thead>
                    <tr>
                        <th scope="col"> NIS </th>
                        <th scope="col"> Nama </th>
                        <th scope="col"> Alamat </th>
                        <th scope="col"> No.Handphone </th>
                        <th scope="col"> Option </th>   
                    </tr>
                </thead>

{{-- Bagian Body Table --}}
                <tbody>
                    <tr>
                        <td> 15782683 </td>
                        <td> Rika Julia </td>
                        <td> Jl.mutiara jamrud </td>
                        <td> 087856743215</td>
                        <td><a type="button" class="btn btn-info" href="#"> Detail </a>
                            <a type="button" class="btn btn-warning" href="#"> Cetak Kartu </a> </td>
                    </tr>

                    <tr>
                        <td> 17653906 </td>
                        <td> Jennie Nuraini </td>
                        <td> Jl.kebon sawit </td>
                        <td> 085612456743 </td>
                        <td><a type="button" class="btn btn-info" href="#"> Detail </a>
                            <a type="button" class="btn btn-warning" href="#"> Cetak Kartu </a> </td>
                    </tr>
                

            </table>
            {{-- Akhir Table --}}
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endsection