@extends('layouts.main')
@section('content')
    <div class="list">
        <a href="/urls" class="btn btn-success mt-5 mb-5" style="float: right;">Back</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>S.no</th>
                <th>id</th>
                <th>name</th>
                <th>link</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $i =>$data)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>
                            {{$data->id}}
                    </td>
                    <td>
                            {{$data->name}}
                    </td>
                    <td>
                        <a href="https://{{$data->link}}" target="_blank">
                            {{$data->link}}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
