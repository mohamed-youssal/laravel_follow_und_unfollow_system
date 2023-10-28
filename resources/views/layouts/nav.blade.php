<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/home">Follow and Unfollow</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
      </li>
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">register</a>
          </li>
      @endguest
    
    </ul>
  </div>
</nav>

<div class="d-flex justify-content-end">
  @auth
  <form class="form" action="{{route('logout')}}" method="POST">
    @csrf
    <button class="btn d-flex flex-column btn-danger m-3" type="submit">logout</button>
  </form>
  @endauth
  
</div>