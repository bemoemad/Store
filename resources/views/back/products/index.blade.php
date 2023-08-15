@extends('back.dashboard')
@section('title')
    Products
@endsection
@section('content')
 <a href="{{url('create-product')}}" class="btn btn-success">Create New Product</a>
 <div class="card">
     <div class="card-body">
      
     @if(isset($products) && $products->count() > 0)
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->name}}</td>
                        <td>{{$prod->price}} </td>                 
                        <td>{{$prod->category->name}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     @else 
        {{ 'No Products Found' }}
     @endif
     </div>
   </div>
@endsection