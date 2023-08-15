@extends('back.dashboard')
@section('title')
Create Product 
@endsection 
@section('content')
   <div class="card">
     <div class="card-body">
        @if(Session()->has('success'))
            <div class="alert alert-success">   
              {{ Session()->get('success') }}
            </div>
        @endif
        <form action="{{url('store-product')}}" method="POST" autocomplete="off">
            @csrf
            <input type="text" name="name" placeholder="Product Name" class="form-control input mb-3">
            <input type="text" name="price" placeholder="Product Price" class="form-control input mb-3">
            <select name="category_id" class="form-control input mb-3">
                <option>Select Category</option>
                @foreach($cats as $cat)  
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
     </div>
   </div>
@endsection