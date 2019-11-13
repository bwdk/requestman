@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Insert new Item</h2>

    <form action="/request" method="post">
        @csrf
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" class="form-control" id="text" placeholder="Enter text" name="text">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" placeholder="Enter body" name="body">
        </div>
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection