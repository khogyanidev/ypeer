@extends('layouts.master')

@section('mydata')

<form action="/create" method="post" class="form">
    @csrf
    <div class="form-group ">
        <input class="form-control" type="text" placeholder="Enter your fullname" name="fullname">
        @error('fullname')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Enter your job" name="job">
        @error('job')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Enter your location" name="location">
        @error('location')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Enter your phone" name="phone">
        @error('phone')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" type="date" name="joiningdate">
        @error('joiningdate')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <input class="form-control" type="submit" value="save">
</form>

@foreach($allmembers as $member)
<h1>{{$member->fullname}}</h1>
@endforeach

@endsection

@section('script')
skjdflkajsdlf
@endsection