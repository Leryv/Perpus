@extends('layouts.app')
@section('content')
@csrf

<a type="submit" class="btn btn-primary" href="{{route('category.create')}}"> GO TO Category </a>

@endsection