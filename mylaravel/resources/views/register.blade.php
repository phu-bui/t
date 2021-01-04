@extends('main')
@section('title')
    Register
@endsection

@section('content')
    <form method="post" action="{{Asset('register')}}">
        <input type="text" name="username" id="username" placeholder="Username" class="form-control">
        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        <input type="password" name="username_confirmation" id="username_confirmation" placeholder="Re-Password" class="form-control">
        <input type="email" name="email" id="email" placeholder="Email" class="form-control">

    </form>
@endsection

