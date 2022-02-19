@extends('layouts.main')

@section('main')

<h1>create your postcard</h1>

<form method="post" enctype="multipart/form-data" action="{{ route('postcard.store') }}" autocomplete="off">
    @csrf
      @method('post')

    <label for="Sender">Sender</label> <br>
    <input type="text" name="sender"> <br>

    <label for="Address">Address</label> <br>
    <input type="text" name="address"> <br>

    <label for="Text">Text</label> <br>
    <input type="text" name="text"> <br>

    <label for="image">image</label> <br>
    <input type="file" name="image"> <br>
    <input type="submit" value="upload">

</form>

@endsection
