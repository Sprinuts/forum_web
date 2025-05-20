<link rel="stylesheet" href="<?= base_url("public/style/navbar.css")?>">

<nav class="navbar navbar-expand-lg bg-body-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('adminforum'); ?>">
            <img src="<?= base_url("public/style/feutech.png") ?>" alt="home" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= base_url('adminforum'); ?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Game
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url(relativePath: 'downloadgame'); ?>">Download Game</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>