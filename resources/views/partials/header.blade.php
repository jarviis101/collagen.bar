<nav class="navbar navbar-dark justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-start" id="menu">
    <div class="container-fluid">
        <a class="navbar-toggler ml-0 ml-sm-0 ml-md-0 ml-lg-0 ml-xl-5 button-nav" data-toggle="collapse" data-target="#navbar-menu" 	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </a>
        <a class="navbar-brand d-flex ml-1 ml-sm-0 ml-md-0 ml-lg-0 ml-xl-2" href="/">Collagen Bar</a>
        <div class="nav-menu collapse" id="navbar-menu">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post">Темы</a>
                </li>
            </ul>
            <div class="nav-list basket">
                <a href="/cart"><i class="fas fa-shopping-basket"></i></a>
                <span class="badge badge-primary">{{ Session::has('cart') ? Session::get('cart')->totalCounts : '0' }}</span>
            </div>
        </div>
        <div class="nav-list basket-in-menu">
            <a href="#"><i class="fas fa-shopping-basket"></i></a>
        </div>
    </div>
</nav>