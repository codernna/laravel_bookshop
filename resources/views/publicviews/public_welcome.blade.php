<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Book Page</title>

  <!-- Bootstrap core CSS -->
  <link href="https://startbootstrap.github.io/startbootstrap-shop-homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://startbootstrap.github.io/startbootstrap-shop-homepage/css/shop-homepage.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


  <!-- Navigation -->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Online Book Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> -->

         
          <!-- <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Books in your Cart <span class="badge badge-pill badge-danger">3</span></a>
          </li> -->
          <a href="{{url('cart')}}"><button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Books in your Cart 
                   
                     <span class="badge badge-pill badge-danger">
                       {{ Cart::count() }}
                     </span>

               </button>
               
           </a>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
        </ul>
       
        <div class="nav-item">
         
          <form class="form-inline" action="">
           <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
         <input type="text" class="form-control" placeholder="Search"><i class="fa fa-search"></i>
        </div>
      </form>
          
      </div>
    </div>
  </nav>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">All Categories</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Pragromming</a>
          <a href="#" class="list-group-item">Web Standards</a>
          <a href="#" class="list-group-item">Security</a>
          <a href="#" class="list-group-item">System Design</a>
          <a href="#" class="list-group-item">Networking</a>

        </div>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">

        <div class="row">

          @foreach($books as $book)


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">

              @if($book->cover)
              <img class="card-img-top" src="{{'/images/'. $book->cover}}" width="300" height="200">
              @endif
    
              <div class="card-body">
                <h5 class="card-title">
                  <p class="card-title">{{$book->title}} &#9733;</p>
                  <p class="card-text">{{$book->categories->name}} &#9734; &#9734;</p>
                </h4>
                <h5>Price- ${{$book->price}}</h5>
                
              </div>

              <div class="card-footer">
               <!--  <a href="{{ url('add-to-cart/'.$book->id) }}" class="btn btn-outline-success">Add to Cart <i class="fa fa-shopping-cart"></i>&#9733; &#9734; </a> -->
                <!-- <p class="btn-holder"><a href="{{ url('/cart') }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> -->
                <form action="/cart" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$book->id}}">
                  <input type="hidden" name="title" value="{{$book->title}}">
                  <input type="hidden" name="price" value="{{$book->price}}">
                  <a href="{{ url('/cart') }}"><button class="btn btn-warning btn-block text-center" role="button">Add to cart</button></a>
                </form>
               <a href="detail/{{$book->id}}"> <button type="button" class="btn btn-outline-success btn-block">View</button></a>
              
              </div>
            </div>
          </div>
          @endforeach
         </div>
        <!-- /.row -->
        {{$books->links()}}

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  

 
