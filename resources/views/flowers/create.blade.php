@extends('layout')

@section('content')
    <h1>add a new flower</h1>   
    <form method="POST" action="{{ route(flowers.store)}}">
    @csrf
    <div class="form-group">
        <label for="species">Species</label>
        <input type="text" name="species" class="form-control" id="species" placeholder="enter the new flower">
    </div>
    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" name="color" class="form-control" id="color" placeholder="enter the flower color">
    </div>
    <button type="submit" class="btn btn-primary">Add Flower</button>
    </form>
    <a href="{{route('bicycles.index') }}">Back to the list</a>
    @endsection
