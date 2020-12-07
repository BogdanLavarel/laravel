@extends('user.default')

@section('content')

    <h1>Main</h1>



    <form action="{{route('forms-post')}}" method="post">
        @CSRF
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="password" placeholder="Enter Password" name="password">
        <input type="password" placeholder="Repeat Password" name="repeat_password">
        <input type="submit">







    </form>


@endsection
