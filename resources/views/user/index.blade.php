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
                    <a type="submit" class="btn btn-info" href="{{route('user.create')}}"> Tambah Anggota Baru </a>

{{-- Bagian Table --}}
        <div class="pt-3"></div>
            <table class="table table-striped">

{{-- Bagian Head Table --}}
                <thead>
                    <tr>
                        <th scope="col"> NIS </th>
                        <th scope="col"> Nama </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> No.Handphone </th>
                        <th scope="col"> Alamat </th>   
                        <th scope="col"> Action </th>                                             
                    </tr>
                </thead>

{{-- Bagian Body Table --}}
                <tbody>
                    <tr>
                        <td> 15782683 </td>
                        <td> Rika Julia </td>
                        <td> Julia@gmail.com </td>
                        <td> 087856743215</td>
                        <td> Jl.mutiara jamrud </td>
                        <td><a type="button" class="btn btn-warning" href="{{route('user.edit')}}"> Edit </a>
                            <a type="button" class="btn btn-danger" href="#"> Delete </a> </td>
                    </tr>

                    <tr>
                        <td> 17653906 </td>
                        <td> Jennie Nuraini </td>
                        <td> nurjennie@gmail.com </td>
                        <td> 085612456743 </td>
                        <td> Jl.kebon sawit </td>
                        <td><a type="button" class="btn btn-warning" href="{{route('user.edit')}}"> Edit </a>
                            <a type="button" class="btn btn-danger" href="#"> Delete </a> </td>
                    </tr>

                        <tr>
                            <td> 15678253 </td>
                            <td> Putri Anggraeni </td>
                            <td> putricantik@gmail.com </td>
                            <td> 081265327843 </td>
                            <td> Jl.Patimura </td>
                            <td><a type="button" class="btn btn-warning" href="{{route('user.edit')}}"> Edit </a>
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