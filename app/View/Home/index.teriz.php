@extends('Template.main.layout')

@section('content')
<h1>Home | <a href="{{baseurl}}/user/login">Login</a> | <a href="{{baseurl}}/user/register">Register</a> | {{ $user['email'] }}</h1>
@endsection