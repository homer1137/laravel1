@extends('layouts.main')

@section('content')
    <h1>This dogs page</h1>
    <div>
        @foreach($dogs as $dog)
        <h5>{{$dog->petName}}</h5>
        @endforeach
    </div>
@endsection

