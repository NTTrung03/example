@extends('home.index')
@section('body')
    <section class="container pb-4 mb-lg-3 pt-5">
        <h1 class="detail-title">Single Project 3D Rendering of Human Sculpture</h1>
        <p class="detail-title">Scene of sunglasses & Headphone on human head</p>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-4 mb-5 ">
                <div class="text-center ">
                    <div class="row">
                        <div class="col-12 ">
                            <img src="/img/avatar.png" alt="" class="mb-2 avtar_aut" style="width: 30%">
                        </div>
                        <div class="col-12 ">
                            <p class="athor-line1">Athor: Ralph Edwards </p>
                            <p class="athor-line1">Athor: Ralph Edwards </p>
                            <p class="athor-line1">Athor: Ralph Edwards </p>
                            <p class="athor-line1">Athor: Ralph Edwards </p>
                            <p class="athor-line1">Athor: Ralph Edwards </p>
                            <div class="line-highlight mb-3"></div>
                            <div class="d-flex justify-content-center icon_share">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                            class="me-4" target="_blank">
                                            <i class="bi bi-facebook fs-4"></i>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}"
                                            class="me-4" target="_blank">
                                            <i class="bi bi-twitter fs-4"></i>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://www.tiktok.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                            class="me-4" target="_blank">
                                            <i class="bi bi-tiktok fs-4"></i>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}"
                                            class="me-4" target="_blank">
                                            <i class="bi bi-whatsapp fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-8">
                <div class="">
                    <!-- Do something -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                            <div class=" rounded-3 w-100 h-100 card-portfolio">
                                <div class="card-img">
                                    <img src="/img/hero.jpg" alt="BFT"
                                        class="rounded-3 object-fit-cover w-100 img-main shadow-lg">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                            <div>
                                <div class="rounded-3 w-100 h-100">
                                    <img src="/img/video_demo.png" alt="BFT" class=" object-fit-cover"
                                        style=" width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4 d-none d-md-block">
                <div class="text-center mt-2">
                    <h2 class="more-title">Explore More</h2>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="card-portfolio" style="width: 70%">
                                <div class="card-img2">
                                    <img src="/img/001.png" alt="" style="width: 100%"
                                        class="justify-content-center align-items-center rounded-3 shadow-sm">
                                </div>
                                <h2 class="h6 text-start">
                                    <a href="" class="stretched-link text-ellipsis">Astronaut & Flashing Neon
                                        Lights</a>
                                    <p class="text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Excepturi ut, fugit aut provident corrupti eaque commodi obcaecati nihil, ipsam
                                        quo perferendis dolore maxime modi doloribus quidem laborum eos dicta cumque?
                                    </p>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 text-start">
                            <div class="card-portfolio" style="width: 70%">
                                <div class="card-img2">
                                    <img src="/img/001.png" alt="" style="width: 100%"
                                        class="justify-content-center align-items-center rounded-3 shadow-sm">
                                </div>
                                <h2 class="h6">
                                    <a href="" class="stretched-link text-ellipsis">Astronaut & Flashing Neon
                                        Lights</a>
                                    <p class="text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Excepturi ut, fugit aut provident corrupti eaque commodi obcaecati nihil, ipsam
                                        quo perferendis dolore maxime modi doloribus quidem laborum eos dicta cumque?
                                    </p>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 text-start">
                            <div class="card-portfolio" style="width: 70%">
                                <div class="card-img2">
                                    <img src="/img/001.png" alt="" style="width: 100%"
                                        class="justify-content-center align-items-center rounded-3 shadow-sm">
                                </div>
                                <h2 class="h6">
                                    <a href="" class="stretched-link text-ellipsis text-start">Astronaut & Flashing
                                        Neon
                                        Lights</a>
                                    <p class="text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Excepturi ut, fugit aut provident corrupti eaque commodi obcaecati nihil, ipsam
                                        quo perferendis dolore maxime modi doloribus quidem laborum eos dicta cumque?
                                    </p>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row mt-3 mb-3">
                    <div class="col-lg-7 mb-4 mb-lg-0 col-md-7 col-sm-12 ">
                        <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                            <h2 class="h1 mb-4 detail-about">About</h2>
                            <p class="fs-lg mb-0 about-sup">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                                esse
                                nesciunt possimus dolorem sequi culpa odit, numquam excepturi consequatur aperiam
                                ipsa repudiandae corrupti aliquam fugit impedit illum deleniti voluptatem. Quaerat.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-3 mb-3 detail_about">
                        <div class="ps-lg-4 ms-lg-3">
                            <h5 class="h5 d-flex align-items-center about-challenge"><i class="bi bi-question-circle-fill"
                                    style=" color: #8760fd;"></i>&nbsp;Challenge</h5>
                            <p class="pb-4 mb-0 mb-lg-3 challenge-sup">Ultricies massa iaculis vestibulum egestas
                                vestibulum,
                                cursus. Leo non arcu ultricies senectus a purus sed.</p>
                            <h5 class="h5 d-flex align-items-center about-challenge"><i class="bi bi-lightbulb"
                                    style=" color: #8760fd;"></i>&nbsp;Solution</h5>

                            <p class="mb-0 challenge-sup">Sit tellus id proin viverra iaculis pellentesque ornare. Diam
                                augue
                                sit feugiat porttitor leo, fusce vel ac. Placerat vulputate quisque.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="bg-light rounded-3 card-portfolio">
                            <div class="card-img">
                                <img src="/img/001.png" alt="" class=" rounded-3 mb-2 shadow-sm"
                                    style=" width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="bg-light rounded-3 card-portfolio">
                            <div class="card-img">
                                <img src="/img/002.png" alt="" class=" rounded-3 mb-2 shadow-sm"
                                    style=" width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6 ">
                        <div class="bg-light rounded-3 card-portfolio">
                            <div class="card-img">
                                <img src="/img/003.png" alt="" class=" rounded-3 mb-2 shadow-sm"
                                    style=" width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light rounded-3 card-portfolio">
                            <div class="card-img">
                                <img src="/img/004.png" alt="" class=" rounded-3 mb-2 shadow-sm"
                                    style=" width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 ">
                <h2 class="about-results">Results</h2>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 results">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 ">
                        <p class="fs-lg pb-4 mb-2 mb-lg-3 h6 results-">Vitae eget in vulputate quam. Turpis habitasse
                            egestas vitae, sed tortor, nunc. Enim, magna duis lectus mauris magna orci,
                            nunc. Tincidunt ultrices mauris, sed quisque. Vulputate volutpat egestas
                            facilisi morbi proin sagittis. Ipsum eleifend commodo eu, at et adipiscing.
                            Viverra turpis sem in tincidunt viverra aliquet eleifend. Adipiscing elit, donec
                            volutpat ante aliquet imperdiet quis hendrerit.</p>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="row text-center">
                            <div class="col-4">
                                <h3 class="h1 mb-2" style=" color: #8760fd;">+1,200</h3>
                                <p class="mb-0">Requests per Week</p>
                            </div>
                            <div class="col-4">
                                <h3 class="h1 mb-2" style=" color: #8760fd;">+1,200</h3>
                                <p class="mb-0">Requests per Week</p>
                            </div>
                            <div class="col-4">
                                <h3 class="h1 mb-2" style=" color: #8760fd;">+1,200</h3>
                                <p class="mb-0">Requests per Week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container d-md-none d-block">
        <div class="text-center mt-2">
            <h2>Explore More</h2>
            <div class="row">
                <div class=" col-4">
                    <div class="card-portfolio">
                        <div class="card-img2">
                            <img src="/img/001.png" alt="" class="w-100"
                                class="justify-content-center align-items-center rounded-3 shadow-sm">
                        </div>
                        <h2 class="h6">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                            <p>Lorem ipsum dolor sit</p>
                        </h2>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="card-portfolio">
                        <div class="card-img2">
                            <img src="/img/001.png" alt="" class="w-100"
                                class="justify-content-center align-items-center rounded-3 shadow-sm">
                        </div>
                        <h2 class="h6">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                            <p>Lorem ipsum dolor sit</p>
                        </h2>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="card-portfolio">
                        <div class="card-img2">
                            <img src="/img/001.png" alt="" class="w-100"
                                class="justify-content-center align-items-center rounded-3 shadow-sm">
                        </div>
                        <h2 class="h6">
                            <a href="" class="stretched-link">Astronaut & Flashing Neon Lights</a>
                            <p>Lorem ipsum dolor sit</p>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-3">
        <div class=" contact-section mt-3">
            <h2>Want to work with us? Let's talk</h2>
            <p class="email">Email@example.com</p>
            <button class="btn">Contact us</button>
        </div>
    </section>
@endsection
