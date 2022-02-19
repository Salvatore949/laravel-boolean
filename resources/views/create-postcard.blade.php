@extends('layouts.main')

@section('main')

<h1>create your postcard</h1>

<form action="{{route('postcard.store')}}" method="POST">

    @method('POST')

    @csrf

    <label for="Sender">Sender</label> <br>
    <input type="text" name="sender"> <br>

    <label for="Address">Address</label> <br>
    <input type="text" name="address"> <br>

    <label for="Text">Text</label> <br>
    <input type="text" name="text"> <br>

    <input type="submit" value="upload">

</form>

@endsection
