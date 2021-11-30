@extends('layouts.app')
@section('content')
<div class="container">
{{-- Bagian Head Card --}}
        <div class="card">
            <div class="card-body">
                <div class="pt-3"></div>

                <h4> Form Tambah Category </h4>

                <div class="card-body">
                <div class="row">
                    <div class="col">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label"> Nama Category </label>
                        <input type="text" name="name" class="form-control" id="" placeholder="">    
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label"> Nomer Rak </label>
                        <input type="text" name="no_rak" class="form-control" id="" placeholder="">    
                    </div>

                    <button class="btn btn-outline-primary" type='submit'> Tambah category </button>
                    <a class="btn btn-outline-secondary" type='submit' href='{{route('home')}}'> Cancel </a>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
