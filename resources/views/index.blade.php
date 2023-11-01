@extends('layouts.master')

@section('mydata')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>TID</th>
        </tr>
    </thead>
    <tbody>

        @foreach($trainers as $trainer)
        <tr>
            <td>{{$trainer->id}}</td>
            <td>{{$trainer->name}}</td>
            <td>{{$trainer->lastname}}</td>
            <td>{{$trainer->tid}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection