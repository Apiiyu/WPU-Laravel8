<nav class="navbar navbar-expand-lg navbar-dark bg-navbar-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="/">BlogCast</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'nav-active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'nav-active' : '' }}" href="/about">About</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Posts') ? 'nav-active' : '' }}" href="/posts">Posts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Developers') ? 'nav-active' : '' }}" href="/posts">Developers</a>
        </li>
      </ul>

      <section class="button ml-auto">
        <a href="#" class="btn btn-outline-none text-white btn-signin">Sign In</a>
        <a href="#" class="btn btn-success btn-signup">Sign Up</a>
      </section>
    </div>
  </div>
</nav>