<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pastel</title>


<!--     Styles bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 

<link rel="stylesheet" href="/css/app.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
</head>
<body id="app-layout" class="site_body">
   

       <nav class="container main_nav nav_container">
          <a href="{{ url('/') }}"><img src="/images/logo.jpg" alt="" id="nav_top_logo"></a> 
            <ul class="nav_bot closed">
                 
                <li><a href="{{ url('/') }}" class="nav_hover_btn">Home</a></li>
                <li><a href="{{ url('/shop') }}"  class="nav_hover_btn">Shop</a></li>
                <li><a href="{{ url('/about') }}"  class="nav_hover_btn">Artists</a></li>
                <li><a href="{{ url('/contact') }}" class="nav_hover_btn">Contact</a></li>
         
               
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}" class="nav_hover_btn">Login</a></li>
                <li><a href="{{ url('/register') }}" class="nav_hover_btn">Register</a></li>
                <li><a id="cart-text" href="{{ url('/cart') }}" class="nav_hover_btn">Cart ({{Cart::count()}})</a></li>
                @else
                    
                @if (Auth::user()->isadmin == 1)
               <li><a href="/admin" class="nav_hover_btn">Admin</a></li>
               <li><a class="nav_hover_btn" id="cart-text" href="{{ url('/cart') }}">Cart ({{Cart::count()}})</a></li>
               @endif
                    <li class="dropdown dropdown_big">
                        <a  class="nav_hover_btn"href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">      
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
           
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                    <li class="logout_mobile"><a href="{{ url('/logout') }}">Logout</a></li>
               
                @endif

            </ul>
            <svg class="hamburger" enable-background="new 0 0 512 512" height="50px" id="Layer_1" version="1.0" viewBox="0 0 512 512" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><rect height="60" width="384" x="64" y="226"/></g><g><rect height="60" width="384" x="64" y="354"/></g><g><rect height="60" width="384" x="64" y="98"/></g></svg>
       </nav>

    @yield('content')
    
    
    <footer class="container">
        <ul>
        <li>Pastel Embassy</li>
        </ul>      
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
$('.delete_button').click(function(event){
    if(confirm('Are you sure you want to delete this?') ===false){
        event.preventDefault();
    }
})
        $(function(){
          $('.hamburger').click(function( ){
              $('.nav_bot').toggleClass('closed');
          })  
        })
</script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
</body>
</html>
