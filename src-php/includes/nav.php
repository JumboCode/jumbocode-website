<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: rgba(45,45,45, 0.9);">
  <a class="navbar-brand" href="/index.php">
    <img src="/src/assets/img/logo.png" width="30" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "home"){?>active<?php }?>"
          href="/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "about"){?>active<?php }?>"
          href="/src-php/about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "projects"){?>active<?php }?>"
           href="/src-php/projects.php">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "join"){?>active<?php }?>"
           href="/src-php/join.php">Join</a>
      </li>
			<li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "contact"){?>active<?php }?>"
          href="/src-php/contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
