@extends('layouts.main')
@section('content')

    <div class="form">

        <form action="/submit" method="post" onsubmit="return true;">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Link</label>
                <input type="text" class="form-control" name="link" placeholder="Enter link">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
