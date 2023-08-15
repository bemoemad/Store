@extends('back.dashboard')
@section('content')
    
   <div class="card">
    <div class="card-body">
        <form action="{{url('store-category')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <!-- <input type="text" name="_token" value="{{csrf_token()}}" class="form-control"> -->
            <input type="text" id="name" name="name" placeholder="Category Name" class="form-control mb-3 input">
            <div id="cat-error"></div>
            
            <label>Photo</label><br>
           
             <input type="file" name="photo" class="form-control mb-3 input"> 
           
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
   </div>
@endsection
@section('js')
<script>
    $(document).ready(function (){
        $('form').submit(function (event){
            if($('#name').val() == '')
            {
                $('#cat-error').html('Category name is required.');
                event.preventDefault();
            }
           
        });
    });
</script>
@endsection