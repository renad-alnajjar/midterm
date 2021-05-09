@extends('Layout.layout')
 @section('app') 
    <div class="container">
        <style>
            .uper {
                margin-top: 40px;
            }
        </style>
        <div class="card uper">
            <div class="card-header">
                Edit Product
            </div>
            @if (isset($crud)) 
            <div class="card-body">
                <form method="post" action="{{url('updateform/'.$crud->id)}}">
                @csrf 

                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control"  value="{{$crud->name}}" name="names" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control"  value="{{$crud->price}} " name="price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>   
                        
                        <input type="text" class="form-control"  value="{{$crud->quantity}}"  name="quantity" />
                    </div>
                    <button  type="submit" name="submit" value="submit" id="submit"  class="btn btn-primary">update Product</button>
                </form>
            </div>
        </div>
     </div>
    @else
    <div class="card-body">
                <form method="post" action="stores">
                @csrf 

                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="names" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="quantity" />
                    </div>
                    <button  type="submit" name="submit" value="submit" id="submit"  class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        @endif

    </div>
    @endsection 
