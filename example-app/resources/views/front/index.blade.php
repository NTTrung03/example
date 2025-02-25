<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <section class="Header">
        <div class="Nav">
            {{-- mở rộng và thu gọn thanh điều hướng --}}
            <nav class="navbar navbar-expand-lg bg-white shadow-sm">
                {{-- căn chỉnh nội dung  --}}
                <div class="container">
                    {{-- logo --}}
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="img/logo.svg" alt="Logo" class="navbar-brand">
                    </a>
                    {{-- nút responsive mobile --}}
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- các liên kết điều hướng --}}
                    <div class="collapse navbar-collapse" id="navbarNav">
                        {{-- điều hướng chiều cao, căn giữa chiều ngang --}}
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    About
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="#">Infomation</a></li>
                                    <li><a class="nav-link" href="#">Team</a></li>
                                    <li><a class="nav-link" href="#">Mission</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-disabled="true">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-disabled="true">Contract</a>
                            </li>
                        </ul>
                        {{-- phần liên hệ --}}
                        <div class="d-flex align-items-center">
                            {{-- me-3 -> margin right 1rem --}}
                            <div class="call-info me-3">
                                <div class="call-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-bold">Make A Call</span>
                                    <small class="text-muted">+84 345 678 910</small>
                                </div>
                            </div>
                            <a href="#" class="contact-btn">Contact Now !</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    
    {{-- Hero Section --}}
    <section class="hero-section container">
        <div class="row align-items-center">
            {{-- Phần Text --}}
            <div class="col-md-6">
                <div class="hero-text">
                    <h1>The Effective<br> Solutions To Grow<br> your Business</h1>
                    <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium<br> doloremque laudantium, totam
                        rem aperiam</p>
                    <a href="#" class="read-btn">Read more →</a>
                    <a href="#" class="view-services">View services →</a>
                </div>
            </div>
            {{-- Phần ảnh --}}
            <div class="col-md-6 text-center">
                <div class="hero-image">
                    {{-- <div class="image-bg"></div> --}}
                    <img src="img/Group.svg" alt="Business Woman">
                </div>
            </div>
        </div>
    </section>

    {{-- offer --}}
    <section class="offer-section py-10 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold">Offer</h2>
            <p class="text-muted">Business integrates with all your favorite tools</p>
            <div class="row mt-4 g-3">
                <div class="col-md-6">
                    <div class="offer-card d-flex align-items-center p-3 bg-white shadow-sm ">
                        <div class="flex-grow-1 align-items-center">
                            <div class="title-info me-3">
                                <div class="">
                                    <i class="bi bi-lightbulb fs-2"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-bold">Title aaaaaaa</span>
                                    <small class="text-muted">Description..........</small>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-light text-primary"><i class="bi bi-box-arrow-up-right"
                                style="color: black"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-card d-flex align-items-center p-3 bg-white shadow-sm ">
                        <div class="flex-grow-1 align-items-center">
                            <div class="title-info me-3">
                                <div>
                                    <i class="bi bi-cash-coin fs-2"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-bold">Title aaaaaaa</span>
                                    <small class="text-muted">Description..........</small>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-light text-primary"><i class="bi bi-box-arrow-up-right"
                                style="color: black"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-card d-flex align-items-center p-3 bg-white shadow-sm ">
                        <div class="flex-grow-1 align-items-center">
                            <div class="title-info me-3">
                                <div>
                                    <i class="bi bi-pin-angle fs-2"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-bold">Title aaaaaaa</span>
                                    <small class="text-muted">Description..........</small>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-light text-primary"><i class="bi bi-box-arrow-up-right"
                                style="color: black"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-card d-flex align-items-center p-3 bg-white shadow-sm ">
                        <div class="flex-grow-1 align-items-center">
                            <div class="title-info me-3">
                                <div>
                                    <i class="bi bi-menu-app-fill fs-2"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-bold">Title aaaaaaaaaa</span>
                                    <small class="text-muted">Description...............</small>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-light text-primary"><i class="bi bi-box-arrow-up-right" style="color: black"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- about --}}
    <section class="about-section py-5 container">
        <div class="row align-items-center">
            <div class="col-md-6 position-relative "> 
                <div class="image-wrapper">  
                    <img class="img-fluid rounded shadow-l main-img" src="img/about1.png" alt="About Image">
                    <img class="img-fluid rounded shadow-lg position-absolute overlay-img overlay-1" src="img/about2.png" alt="About Image" >
                    <img class="img-fluid rounded shadow-lg position-absolute overlay-img overlay-2" src="img/about3.png" alt="About Image" >
                </div> 
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold">Grow Your Business With Our Next Agency</h2>
                <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-box p-3 mb-3 rounded shadow-sm">
                            <h3 class="fw-bold">88%</h3>
                            <p class="mb-0">Traffic Genarated</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box p-3 mb-3  rounded shadow-sm">
                            <h3 class="fw-bold">88%</h3>
                            <p class="mb-0">Traffic Genarated</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box p-3 mb-3  rounded shadow-sm">
                            <h3 class="fw-bold">88%</h3>
                            <p class="mb-0">Traffic Genarated</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box p-3 mb-3  rounded shadow-sm">
                            <h3 class="fw-bold">88%</h3>
                            <p class="mb-0">Traffic Genarated</p>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-3 px-4 py-2">Learn more →</a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
