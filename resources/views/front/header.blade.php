

<link rel="stylesheet" href="css/home.css">
<!-- <link rel="stylesheet" href="css/header.css"> -->
<header>
  <div class="topbar">
   <div class="row">
     <div class="col-4 phone">
       <i class="fa fa-phone fa-lg fa fw"></i>
       +4234234234
     </div>
     <div class="col-4 text-center">
       <img src="./img/logo-diy.png" alt="" class="logo">
     </div>
     <div class="col-4 text-right">

       @guest
       <a href="{{url('/login')}}" class="user">
         <i class="fa fa-user pr-3"></i></a>
       @endguest

         @auth
         <a href="{{ url('/perfil') }}">Ver mi perfil</a>

         <a class="user" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
          <i class="fa fa-user-slash pr-3"></i>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
         <a href="{{url('/wishlist')}}" class="user">
         <span class="icons-separator"></span>
         <i class="fa fa-shopping-cart pl-3"></i>
         </a>
         @endauth


     </div>
   </div>
  </div>
</header>
