@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="/css/table.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js">


	<div class="row">
		
        
        <div class="col-md-10">
        <div class="table-responsive">

              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Image</th>
                    <th>Name</th>
                     <th>Email</th>
                     <th>role</th>
                      <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>
    
 
    @foreach ($user as $one)
    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        @if ($one->Image)
        <td><img src="uploads/{{$one->Image}}" alt="" width="50px" ></td>
        @else
        <td><img src="images/download.jpg" alt="" width="50px" ></td>
        @endif
        <td >{{$one->name}} </td>
        <td>{{$one->email}}</td>
        <td>{{$one->role}}</td>
        <td><a href="/UsersRegistarion/{{$one->id}}">
                <p data-placement="top" data-toggle="tooltip" title="Edit">
                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                    <span class="fas fa-pencil-alt"></span>
                    </button>
                </p> 
            </a>
        </td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fas fa-trash"></span></button></p></td>
        </tr>

    @endforeach

    
   
    
   
    
    </tbody>
        
</table>
    @if (session('msg'))
    <p class="alert alert-success">{{session('msg') ?? ' '}}</p>
    @endif




    




    </div>
    <script src="/js/table.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
@endsection