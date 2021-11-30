@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Nis </label>
                                <input type="text" name=" " class="form-control" id="" placeholder="Tambahkan NIS ">    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Nama </label>
                                <input type="text" name=" " class="form-control" id="" placeholder="John">    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Email </label>
                                <input type="text" name=" " class="form-control" id="" placeholder="petugas@perpus.com">    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Nomer HandPhone </label>
                                <input type="text" name=" " class="form-control" id="" placeholder="08xx-xxxx-xxxx">    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col mb-3">
                                <label for="" class="form-label"> Alamat </label>
                                <input type="text" name=" " class="form-control" id="" placeholder="Tambahkan Alamat">    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col mb-3">
                                <a type="submit" class="btn btn-primary" href="#"> Tambah Anggota </a>
                                <a class="btn btn-outline-secondary" href="{{route('user')}}"> Cancel </a>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection