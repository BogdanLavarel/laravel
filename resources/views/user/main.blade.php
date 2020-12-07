@extends('user.default')

@section('content')

    <h1>Main</h1>



    <form action="{{route('params-post')}}" method="post">
        @CSRF
        <input type="text" name="name">
        <input type="text" name="test">
        <input type="submit">

    </form>


@endsection
