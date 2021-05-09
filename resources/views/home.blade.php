@extends('Layout.layout')
 @section('app') 

<div class="container">
        <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Products</h3>
            </div>
        </div>
        <a class="btn btn-info"   href="/create">Add Products</a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th width="280px">Actions</th>
                
            </tr>
 
            @csrf 
        @foreach($cruds as $crud)
            <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->price}}</td>
                <td>{{$crud->quantity}} </td>
                 <td>
                 <a class="btn btn-info" href="editform/{{$crud->id}}">Edit</a>
                 <a class="btn btn-danger" href="deletes/{{$crud->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
    @endsection 