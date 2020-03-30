@extends('layouts.admin')
<link rel="stylesheet" href="/css/style.css">
@section('content')
<div class="user_mang">
    @if (session('msg'))
    <p class="alert alert-success">{{session('msg') ?? ' '}}</p>
    @endif
    @if ( auth()->user()->Image )
    <img src="/uploads/{{auth()->user()->Image}}" alt="" class="user_image" id="UserImg" width="200px" height="200px">
    @else
    <img src="/images/download.jpg" alt="" class="user_image" id="UserImg">
    @endif
    <br>
    <small>double click to change user picture</small>
    <h3>{{ auth()->user()->name}}</h3>  
    <h4>{{auth()->user()->email}}</h4>
    <form action="/image" hidden id="imageform" method="POST" enctype="multipart/form-data" >
        @csrf
    <input type="file" name="Image_usr" id="usr-img"  {{ csrf_field() }} >
    <input type="hidden" name="id" value="{{ auth()->user()->id}}">
    <input type="submit" value="">
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/new.js"></script>
@endsection