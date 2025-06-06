<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ToDoApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- If user is login -->
    @auth
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
      </ul>
      <form action="/logout" method="post">
        @csrf
          <button class="btn btn-success" type="submit">Logout</button>
      </form>
    </div>
    @endauth

    <!-- If user not login -->
    @guest
    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul></ul>
        <div class="d-flex">
            <a class="btn btn-outline-success mx-5" href="'/login">Login</a>
            <a class="btn btn-success" href="/register">Sign Up</a>
        </div>
    </div> -->
    @endguest
  </div>
</nav>