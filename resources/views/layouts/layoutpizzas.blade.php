<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- sementic -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.1/dist/semantic.min.css">
  <!-- ccs local -->
  <link rel="stylesheet" type="text/css" href="../css/appPizzas.css">
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 640px)" href="../css/telephone/pizzas.css">
  
  <title>Blague Pizza - @yield('title')</title>
</head>

  <body>

    <div class="titre">

    <div class="container-fluid">
      
          <div class="row">
            
            <div class="col-"><a href="/" style="color:white;">Blague Pizza</a></div>
            <div class="col"></div>
            <div class="col-">
              <a class="menu" href="/pizzas" style="color:white;">Pizzas</a>
            </div>
            <div class="col-">
              <a class="menu" href="/pastas" style="color:white;">Pastas</a>
            </div>
            <div class="col-">
              <a class="menu" href="/contact" style="color:white;">Contact</a>
            </div> 
           
          </div>
          
      </div>
  </div>
    
    <div >
      @yield('content')
    </div>
    <!-- <a href="/pizzas" style="font-size: 2em;"><i class="angle double up icon" ></i></a> -->

   

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/app.js" type="text/javascript"></script>
  </body>
</html>