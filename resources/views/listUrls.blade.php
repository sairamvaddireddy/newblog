@extends('layouts.main')
@section('content')
    <a href="/" class="btn btn-success mt-5 mb-5" style="float: right;">Home</a>
    <div class="list">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>S.No</th>
                <th>link</th>
            </tr>
            </thead>
            <tbody>
            @foreach($urls as $i =>$url)
            <tr>
                <td>{{$i+1}}</td>
                <td>
                    <a href="{{url('/'.$url['link'].'/'. $url['id'])}}">
                        {{$url->link}}
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
