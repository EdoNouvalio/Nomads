<!-- navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo.png') }}" alt="logo NOMADS"> 
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Link</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="#">Testimonial</a>
                </li>
            </ul>
               
            @guest
               <!-- Mobile Button -->
               <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ 'login' }}'">
                  Masuk
                </button>
              </form>

              <!-- Desktop Button -->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ 'login' }}'">
                  Masuk
                </button>
              </form>
            @endguest


            @auth
            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
              @csrf
             <button class="btn btn-login my-2 my-sm-0" type="submit">
               Keluar
             </button>
           </form>

           <!-- Desktop Button -->
           <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
            @csrf
             <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
               Keluar
             </button>
           </form>
            @endauth

        </div>
    </nav>
</div>
<!-- end navbar -->