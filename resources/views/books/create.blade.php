@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    <div class="alert alert-secondary" role="alert"> Form Tambah Buku </div> 
        <div class="row">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">

                {{-- Bagian form --}}
                
                <form action="" method="POST">
                    {{-- Baris 1 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Judul Buku </label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Judul Buku...">    
                            </div>
                        </div>

                    {{-- Baris 2 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Category </label>
                                <select name="category_id" id="" class="form-control">
                                <option selected> Pilih Category </option>
                                <option value="1"> Bahasa Pemrograman </option>
                                <option value="2"> Editing </option>
                                <option value="3"> Hardware Komputer </option>
                                </select>
                            </div>
                        </div>

                    {{-- Baris 3 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Deskripsi </label>
                                <input type="text" class="form-control" name="description" id="" placeholder="Deskripsi...">
                            </div>
                        </div>

                    {{-- Baris 4 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                            <label for="" class="form-label"> Penerbit </label>
                            <input type="text" class="form-control" name="penerbit" id="" placeholder="Penerbit...">
                            </div>
                        </div>

                    {{-- Baris 5 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                            <label for="" class="form-label"> Tanggal Terbit </label>
                            <input type="date" class="form-control" name="tanggal_terbit" id="">
                        </div>

                    {{-- Baris 6 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                            <label for="" class="form-label"> Jumlah Buku </label>
                            <input type="number" class="form-control" name="stock" id="">
                            </div>
                        </div>
                        
                    {{-- Baris 7 --}}
                        <div class="form-group">
                            <div class="col mb-3">
                            <label for="formgroupDocument" class="form-label"> Cover Buku </label>
                            <input type="file" class="form-control" name="images" id="" placeholder="Cover Buku">
                            </div>
                        </div>                        
                    
                    {{-- Baris 8 --}}
                        <div class="form-group">
                            <div class="col">
                                <button class="btn btn-outline-primary" type="submit"> Tambah buku </button>
                                <a class="btn btn-outline-secondary" href="{{route('books')}}"> Cancel </a>
                            </div>
                        </div>  
                </form> 

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
