<div class="left">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Schema</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{($title === 'Home') ? 'active' : ''}}" aria-current="page" href="#">Tournaments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === 'Login') ? 'active' : ''}}" href="#">Sign in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === 'Register') ? 'active' : ''}}" href="auth/register">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === 'About') ? 'active' : ''}}" href="about">About</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
      </nav>