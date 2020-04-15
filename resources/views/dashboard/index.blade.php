@extends('layouts.base')
@section('title')TwitterAdmin|Dashboard @endsection
@section('content')
<div class="row mt-5">
    <div class="col d-flex d-xl-flex justify-content-between">
        <h3>Dashboard</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        @guest
        <a class="btn btn-outline-primary" href="{{ route('social.login','twitter') }}">ログイン</a>
        @endguest
    </div>
</div>
@endsection
