<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main">главная страница</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">скидки</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">для мужчин</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">для женщин</a>
        </li>
      </ul>
      <!-- <img src="../assets/img/images.png" alt=""> -->
      <div class="input-group w-50">
              <input type="text" class="form-control" placeholder="поиск" aria-label="Input group example" aria-describedby="basic-addon1">
              <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
</svg>
              </span>
            </div>
    </div>
  </div>
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
    <?php if(empty ($_COOKIE['translator_sait'])): ?>
      <li class="nav-item m-2">
          <a class="btn btn-outline-primary" aria-current="page" href="registration">регистрация</a>
        </li>
        <li class="nav-item m-2">
          <a class="btn btn-outline-primary" aria-current="page" href="avtoration">войти</a>
        </li>
        <?php elseif(isset($_COOKIE['translator_sait'])):?>
        <li class="nav-item">
          <a class="btn btn-outline-primary" aria-current="page" href="logaut">выход</a>
        </li>
        
      <?php endif?>

      </ul>
</nav>