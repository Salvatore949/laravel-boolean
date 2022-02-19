@extends('layouts.main')

@section('main')

<a href="{{route('postcardcreate')}}"> CREATE NEW POSTCARD </a>

<postcard></postcard>

@endsection
