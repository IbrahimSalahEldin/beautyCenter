  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light " style="background-color:#343a40; color:white;" >
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> -->
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('post.index')}}" class="nav-link text-white">Posts</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('book.index')}}" class="nav-link text-white">Books</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('clinte.index')}}" class="nav-link text-white">Clintes</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('post.create')}}" class="nav-link text-white">Create post</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('book.create')}}" class="nav-link text-white">Create Book</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Existing code for other right navbar links -->

    <li class="nav-item d-none d-sm-inline-block ">
      <a class=" text-white" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>
    </li>
  </ul>
</nav>

  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
 

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <div class="image">
          <img src="{{asset('dist/img/dashboard.jpeg')}}" class="img-circle elevation-2" alt="User Image" width="200px" height="200px">
        </div>
        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   welcome {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                           
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </nav>
     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>