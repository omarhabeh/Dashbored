@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/style.css">
<div class="user_mang">

    @if ( $user->Image )
    <img src="/uploads/{{$user->Image}}" alt="" class="user_image" id="UserImg" width="200px" height="200px">
    @else
    <img src="/images/download.jpg" alt="" class="user_image" id="UserImg">
    @endif
    <br>
    <small>double click to change user picture</small>
</div>
        
    <div class="container">
        
        <form action="/UsersRegistarion" method="POST">
            @csrf
        <div class="form-group">
            <label for="Name" >Name</label>
            <input type="hidden" name="id" value="{{$user->id}}">
        <input type="text" name="Name" value="{{$user->name}}"id="" class="form-control">
        <br>
        <label for="Email">Email</label>
        <input type="text" name="Email" value="{{$user->email}}"id="" class="form-control">
        <br>
        <label for="Role">Role</label>
        <select name="Role" id=""  class="form-control" aria-selected="true">
            <option value="admin" @if ($user->role == "admin")
                selected
            @endif>Admin</option>
            <option value="manager" @if ($user->role == "manager")
                selected
            @endif>Manager</option>
            <option value="user" @if ($user->role == "user")
                selected
            @endif>User</option>
        </select>
        <br>
        <input type="submit" value="Submit" class="btn btn-primary" width="100%" class="form-control">
        </div>
        </form>
    </div>
    <form action="/image" hidden id="imageform" method="POST" enctype="multipart/form-data" >
        @csrf
    <input type="file" name="Image_usr" id="usr-img"  {{ csrf_field() }} >
    <input type="hidden" name="id" value="{{ auth()->user()->id}}">
    <input type="submit" value="Submit">
    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/new.js"></script>
@endsection