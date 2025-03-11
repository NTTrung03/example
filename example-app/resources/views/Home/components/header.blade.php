<section class="Header">
    <div class="Nav">
        {{-- mở rộng và thu gọn thanh điều hướng --}}
        <nav class="navbar navbar-expand-lg bg-white shadow-sm">
            {{-- căn chỉnh nội dung  --}}
            <div class="container">
                {{-- logo --}}
                <a class="navbar-brand d-flex align-items-center" href="/">
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
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">Infomation</a></li>
                                <li><a class="nav-link" href="/team">Team</a></li>
                                <li><a class="nav-link" href="#">Mission</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="/contact">Contract</a>
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