<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <!-- css -->
    <link rel="stylesheet" href="css/blog.css">
    <!-- bootstrap -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <h1 class="logo">NEWS</h1>
        <div class="search">
            <input type="text" placeholder="type to search">
            <i class="bi bi-search"></i>
        </div>
        <div class="login">
            <a href="login.php"><i class="bi bi-person-circle"></i></a>
        </div>
    </header>
    <!-- carousel -->
    <section>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/jkt48langitbiru.jpeg" alt="" height="575px" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/jkt48magichour.jpeg" alt="" height="575px" width="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/jkt48magichour.jpeg" alt="" height="575px" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- blog -->
    <section class="blog1">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis" style="background-image: url(img/jkt48langitbiru.jpeg)";>
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Baca Selengkapnya</a></p>
        </div>
    </div>
    <div class="row mb-2 sub-blog">
        <div class="col-md-8">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-md-6">
                    <img src="img/jkt48langitbiru.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                    <h5 class="mb-0">Judul Berita</h5>
                    <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Baca Selangkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 32px;">
                    <div>
                        <h4>Berita Terpopuler</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <img src="" alt="">
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Example blog post title</h6>
                                    <small class="text-body-secondary">January 15, 2024</small>
                                </div></a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <img src="" alt="">
                                <div class="col-lg-8">
                                    <h6 class="mb-0">This is another blog post title</h6>
                                    <small class="text-body-secondary">January 14, 2024</small>
                                </div></a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <img src="" alt="">
                                <div class="col-lg-8">
                                    <h6 class="mb-0">This is another blog post title</h6>
                                    <small class="text-body-secondary">January 14, 2024</small>
                                </div></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- card -->
    <section class="blog2">
        <div class="card">
            <img src="img/jkt48langitbiru.jpeg" alt="">
            <h3>judul</h3>
            <div class="publish">
                <p>jurnalis,</p>
                <p>tanggal</p>
            </div>
            <div class="konten">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quod ea ab harum pariatur distinctio quas numquam cum fugiat nemo debitis soluta obcaecati illum, quibusdam sapiente nulla provident dignissimos porro?</p>
            </div>
        </div>
        <div class="card">
            <img src="img/jkt48magichour.jpeg" alt="">
            <h3>judul</h3>
            <div class="publish">
                <p>jurnalis,</p>
                <p>tanggal</p>
            </div>
            <div class="konten">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quod ea ab harum pariatur distinctio quas numquam cum fugiat nemo debitis soluta obcaecati illum, quibusdam sapiente nulla provident dignissimos porro?</p>
            </div>
        </div>
        <div class="card">
            <img src="img/jkt48langitbiru.jpeg" alt="">
            <h3>judul</h3>
            <div class="publish">
                <p>jurnalis,</p>
                <p>tanggal</p>
            </div>
            <div class="konten">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quod ea ab harum pariatur distinctio quas numquam cum fugiat nemo debitis soluta obcaecati illum, quibusdam sapiente nulla provident dignissimos porro?</p>
            </div>
        </div>
    </section>
    <!-- blog 3 -->

    <!-- footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Company, Inc</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>