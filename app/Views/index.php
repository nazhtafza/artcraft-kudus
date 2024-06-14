<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">Artcraft Kudus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tentang</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Toko
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">TikTok</a></li>
                    <li><a class="dropdown-item" href="#">Shopee</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                </ul>
            </li>
        </ul>
        <button class="btn btn-custom ml-auto" type="button">Masuk</button>
    </div>
</nav>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Artcraft Unik Ramah Lingkungan</h1>
        <p class="lead">Anda dapat menyelamatkan lingkungan dari limbah filter rokok dengan membeli produk Artcraft Kudus.</p>
        <p class="lead">
            <a class="btn btn-custom btn-lg" href="#" role="button">Beli Sekarang</a>
        </p>
        <img src="<?= base_url('Images/jumotron.jpeg') ?>" class="img-fluid rounded" alt="Jumbotron Image">
    </div>
</div>