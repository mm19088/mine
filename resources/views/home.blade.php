@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://i.pinimg.com/564x/31/13/69/311369f4b769b1ce76c8ca848361a8b2.jpg" class="rounded-circle" width="200" height="200">
        </div>


    <div class="col-9 pt-5">
        <div><h1>{{ $user->username }}</h1></div>
        <div class="d-flex">
            <div class="pr-5"><strong>1</strong> posts</divclass></div>
            <div class="pr-5"><strong>1</strong> followers</divclass></div>
            <div class="pr-5"><strong>1</strong> following</divclass></div>
        </div>
        <div class="pt-4 font-weight-bold">bolds</div>
        <div>teksts</div>
        <div><a href="#">links</a></div>
    </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://i.pinimg.com/564x/31/13/69/311369f4b769b1ce76c8ca848361a8b2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.pinimg.com/564x/31/13/69/311369f4b769b1ce76c8ca848361a8b2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.pinimg.com/564x/31/13/69/311369f4b769b1ce76c8ca848361a8b2.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
