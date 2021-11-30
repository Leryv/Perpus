@extends('layouts.app')

@section('content')
    <div class='container'>
        <form action="{{route('uji-coba.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=" ">Angka 1</label>
                        <input type="text" name="angka_1"
                        class="form-control" id="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=" ">Angka 2</label>
                        <input type="text" name="angka_2"
                        class="form-control" id="" required>
                    </div>
                </div>        
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=" ">Angka 3</label>
                        <input type="text" name="angka_3"
                        class="form-control" id="" required>
                    </div>
                </div>        
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=" ">Angka 4</label>
                        <input type="text" name="angka_4"
                        class="form-control" id="" required>
                    </div>
                </div>                        
                <button type="submit" class="btn btn-info">
                    jumlah
                </button>
            </div>
        </div>
    </div>
</div>
@endsection