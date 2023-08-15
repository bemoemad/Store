@extends('back.dashboard')
@section('title')
    Products
@endsection
@section('content')
 
 <div class="card">
    
     <div class="card-body">
        <div class="alert alert-success">Products in {{$cat->name}} Category</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->name}}</td>
                        <td>{{$prod->price}} </td>                 
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>
   </div>
@endsection