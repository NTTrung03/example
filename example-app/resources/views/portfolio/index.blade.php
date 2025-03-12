<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    {{-- @include('portfolio.components.header'); --}}
    @include('home.components.header');
    <section class="page_title container d-md-flex align-items-center justify-content-between pb-3">
        <h1 class="text-nowrap mb-md-4 pe-md-5">Portfolio</h1>
        <nav class="overflow-auto">
            <ul class="nav nav-tab-alt flex-nowrap border-0">
                <li class="nav-item"><a href="#" class="nav-link text-nowrap active">All</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-nowrap">Website</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-nowrap">Branding</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-nowrap">Branding</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-nowrap">Branding</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-nowrap">Branding</a></li>
            </ul>
        </nav>
    </section>


    {{--  --}}
    <section class="pb-5 mb-2 mb-md-4 mb-lg-5 container">
        <div class="row pb-lg-3">
            <div class="col-md-5 mb-2">
                <div class= "card card-portfolio">
                    <div class="card-img">
                        <img src="/img/01.jpg" alt="" style="width: 100%" class=" rounded-3">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class="text-muted porfolio-sup">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7  mb-2">
                <div class="card card-portfolio">
                    <div class="card-img">
                        <img src="/img/02.jpg" alt="" style="width: 100%;" class=" rounded-3">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="/Details_p1" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 mb-2">
                <div class="card card-portfolio">
                    <div class="card-img">
                        <img src="/img/03.jpg" alt="" class="rounded-3" style="width: 100%">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5  mb-2">
                <div class= "card card-portfolio">
                    <div class="card-img">
                        <img src="/img/04.jpg" alt="" class="rounded-3" style="width: 100%">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5  mb-2">
                <div class= "card card-portfolio">
                    <div class="card-img">
                        <img src="/img/05.jpg" alt="" class="rounded-3" style="width: 100%">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7  mb-2">
                <div class="card card-portfolio">
                    <div class="card-img">
                        <img src="/img/06.jpg" alt="" class="rounded-3" style="width: 100%">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 mb-2">
                <div class="card card-portfolio">
                    <div class="card-img">
                        <img src="/img/09.png" alt="" class="rounded-3 object-fit-cover" style="width: 100%">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5  mb-2">
                <div class= "card card-portfolio">
                    <div class="card-img">
                        <img src="/img/10.png" alt="" class="rounded-3 object-fit-cover"
                            style="width: 100%">
                    </div>
                    <div class="my-2">
                        <h2 class="h4">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                        </h2>
                        <div class="card-portfolio-meta pb-1">
                            <span class=" text-muted">Lorem, ipsum dolor sit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
   
    {{--  --}}

    <section class="container mb-1 mb-md-3">
        <div class="bg-3d rounded-3 overflow-hidden">
            <div class="row align-items-center">
                <div class="col-xl-4  col-md-5 offset-lg-1">
                    <div class="pt-5 pb-3 pd-md-5 px-4 px-lg-0 text-center text-md-start">
                        <p class=" lead md-3">Ready to get started?</p>
                        <h2 class="h1 pb-3 pb-sm-4">Take Your <span class=" text-primary">Business</span> To The Next
                            Level</h2>
                        <a href="" class="btn btn-primary">
                            Work with us
                        </a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-xl-1">
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100">
                        <div></div>
                        <img src="/img/3duser.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('Home.components.footer');



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
