<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Site</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <style>
       #result{
         width:205px;
         background-color:#eee;
         display:inline-block;
         position:absolute;
         right:180px;
         z-index:1000;
         border-radius:5px;
         padding:10px;
       }
    </style>
</head>
<body>
    
<!-- Navbar Start  -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          @csrf
        <input class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search">
        
      </form>
      
        <a href="#exampleModal" data-bs-toggle="modal" class="btn btn-warning signup rounded-pill">Sign Up</a>
        <a href="login.html"  class="btn btn-success rounded-pill">Login</a>
      </div>
    </div>
    
</nav>
<!-- Navbar Ends  -->
<div id="result"></div>
<!-- Slide Start -->
<div id="mySlide" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="{{asset('frontend/images/2.jpg')}}" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/3.jpg')}}" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/4.jpg')}}" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slide Ends -->

<!-- Main Categories Start -->
 <div class="container">
   <div class="row">
      <div class="main-title mt-5 mb-3">
          <h1>Main Categories</h1>
      </div>
   </div>
 </div>
  <div class="container">   
     <div class="row">
       
       <?php 
          $cats = App\Models\Category::take(4)->orderBy('created_at','DESC')->get();
       ?>
       @foreach($cats as $cat)
      
       <div class="col-6 col-md-3 cats">
          <!-- Start Clothes Card -->
          <a href="#">
          <div class="card text-center pt-3">
                   
             <div class="card-body">
               @if($cat->photo != NULL)
                  <img src="{{asset('cats/'.$cat->photo)}}" width="60" height="60" style="margin:0 auto">
               @else
                 <img src="{{asset('backend/img.jpg')}}" width="60" height="60" style="margin:0 auto">
               @endif  
              <p class="card-text">{{$cat->name}}</p>
              <span class="badge bg-primary">100  </span>
            </div>
          </div>           
          <!-- End Clothes Card -->
          </a>
       </div>
      
      @endforeach
      
     
     
      </div><!--/ End Row -->
  </div><!--/ End Container -->



  
  <div class="container">
    <div class="row">
       <div class="main-title mt-5 mb-3">
           <h1>Contact Us</h1>
       </div>
    </div>
  </div>
    
  <div class="container">
      <div class="row">
          <div class="col-md-6">
               <form class="contact"> 
                  <div class="row">
                      <div class="col-md-6">
                        <input type="text" name="firstname" placeholder="First Name" class="form-control required">
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="lasttname" placeholder="Last Name" class="form-control required">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <input type="text" name="subject" placeholder="Subject" class="form-control required">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <textarea name="message" class="form-control required" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mt-3">
                      <button type="submit" class="btn btn-success">Send</button>
                     </div>
                  </div>
                </form>
           </div>
           
           <div class="col-md-6">
               <img src="{{asset('frontend/images/contact.jpg')}}" class="w-100 contact">
           </div>
          
    
      </div><!--/ End Row -->
  </div><!--/ End Container -->
<!-- Main Categories Ends -->


<!-- Footer Start -->
<div class="footer text-center pt-5 mt-5"> 
  <div class="container-fluid">
    <div class="row">   
      <div class="col-md-4">
            <div class="logo">
              <img src="{{asset('frontend/images/logo.jpg')}}">
            </div>
            <div class="desc pt-3">
              <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit.</p>
            </div>
      </div>
      <div class="col-6 col-md-2">
          <div class="links fs-4 pb-2">
            Links
          </div>
          <ul class="list-unstyled">
            <li><a href="">Home</a></li>
            <li><a href="">Catgories</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Policy</a></li>
          </ul>
      </div>
      <div class="col-6 col-md-2">
        <div class="About fs-4 pb-2">
          About Us
        </div>
        <ul class="list-unstyled">
          <li><a href="">Who we are?</a></li>
          <li><a href="">Our Vision</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4">
          <div class="contacts fs-4 pb-2">
              Contact
          </div>
          <div class="email pb-3">
            <a href="mailto:email@domain.com" class="btn btn-warning rounded-pill">
              <i class="fa-regular fa-envelope"></i> 
              email@domain.com
            </a>
          </div>
          
          <div class="social ">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
          </div>
      </div>

    </div>
  </div>
</div>
<!-- Footer Ends -->
<!-- Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
              <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp">    
              </div>

                <div class="mb-3">
                  <label  class="form-label">Email address</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp">    
                </div>
                
                <div class="mb-3">
                  <label  class="form-label">Password</label>
                  <input type="password" id="password" class="form-control">
                  <span class="pass-error" id="error">Password and Confirm Password dose not match.</span>
                </div>
                
                <div class="mb-3">
                  <label  class="form-label">Confirm Password</label>
                  <input type="password" id="confirm" class="form-control"  onkeyup="chkPassword()">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Sign Up</button>
        </div>
      </div>
    </div>
</div>
<!-- Modal Ends  -->

<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <script src="js/bootstrap.js"></script> -->
<script src="{{asset('frontend/js/all.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/plugin.js')}}"></script>
<script>
   $(document).ready(function (){
    
     $('#result').hide();
     $('#search').keyup(function (){
        let input = $('#search').val();
        if(input != '')
        {
          // $('#result').fadeIn();
          // $('#result').html(input);
          $.ajax({});
        }
        else 
        {
          $('#result').fadeOut();
        }
     });
   });
</script>
</body>
</html>