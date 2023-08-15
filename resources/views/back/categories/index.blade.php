
@extends('back.dashboard')
@section('title')
    Categories
@endsection
@section('content')
 
   <div class="card">
     <div class="card-body">
        <a href="{{url('categories/create-category')}}" class="btn btn-success mb-3">Create Category</a>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Photo</th>
                    <th>Products</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
               @php $s = 1 @endphp 
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$s++}}</td>
                        <td>
                           
                            <a href="#" title="
                            <?php 
                                foreach($cat->products as $c ){ 
                                  echo  $c->name . '<br>' ;
                               }
                                  
                            ?>
                            ">
                                
                            {{$cat->name}}</a>
             
                        </td>
                        <td>
                            @if($cat->photo != NULL)
                              <img src="{{asset('cats/'.$cat->photo)}}" width="60" height="60" alt="">
                            @else
                                {{ 'No Photo..' }}
                            @endif                          
                        </td>
                        <td>
                           
                            <select>
                           @foreach($cat->products as $c )
                                <option> {{$c->name}} </option>
                           @endforeach
                            </select>
                        </td>
                        <td>
                            <a href="{{url('categories/show-products',$cat->id)}}" class="btn btn-success">Products</a>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="{{url('categories/delete-category',$cat->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>
   </div>

  

 @endsection