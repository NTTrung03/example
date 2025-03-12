<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('Home.components.header')
    <section class="bg-team ">
        <div class="container">
            <div class="team d-flex justify-content-center">
                <div class="p-2 mt-5">
                    <h1 class="fw-bold teammember-title">Team Member</h1>
                </div>
            </div>
            <div class="text-center text-muted">
                <p class="teammember-sup">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, culpa asperiores. Minima debitis
                    nulla obcaecati quia quo deleniti sit consequuntur, maiores illum adipisci qui asperiores libero
                    magni non alias dolores.</p>
            </div>

        </div>
    </section>

    {{--  --}}
    <section class="container mt-5">
        <div class="">
            <h5 class="teammember-about">About The Team</h5>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-2 about_team">

                <div>
                    <h2 class="fw-bold ">Passionate & Dedicated
                        Team Member to delivering
                        exceptional results <p></p></h2>
                       
                </div>
            </div>
            <div class="col-md-6 col-ld-6 col-sm-12">
                <div class="">
                    <p class="teammember-text">
                        Which revolutionized our industry. This forward-thinking approach allowed us to stay at the
                        forefront of innovation and better serve
                    </p>
                </div>
                <div class="teammember-text">
                    <p>As technology evolved, so did we. In 1995, we embraced mention a significant
                        technological advancement or change, which revolutionized our industry.
                        This forward-thinking approach allowed us to stay at the forefront</p>
                </div>
            </div>
        </div>
    </section>

    {{--  --}}
    <section class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-bg-6 col-sm-12 team_img">
                <div class="team_img">
                    {{-- <img src="/img/103.png" alt="" class="w-100 rounded-3 shadow-sm"> --}}
                    <img src="/img/104.png" alt="" class="w-100 rounded-3 shadow-sm">
                    
                </div>
            </div>
            <div class="col-lg-4 col-bg-6 col-sm-12 team_img">
                <div class="team_img ">
                    <h3 class="text-center">ABCDYFJ</h3>
                    {{-- <img src="/img/104.png" alt="" class="w-100 rounded-3 shadow-sm"> --}}
                    <p class="text-center">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis quia ducimus nam accusantium consectetur earum fugit sed voluptate nemo vel? Est ullam quam modi provident pariatur repudiandae assumenda dicta deserunt.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus quis maiores tempore labore! Quidem, nulla odio. Doloremque cupiditate eligendi quae incidunt. Alias sequi odio suscipit odit quae possimus quis blanditiis.
                    </p>
                </div>
            </div>
        </div>
        
    </section>


    {{--  --}}
    <section class="container mt-5 mb-5">
        <div class="text-center ">
            <h4 class="fw-bold teammember-title">Team Member</h4>
        </div>
        <div class="text-center">
            <p class="teammember-sup">Meet Our Professional Team Members</p>
        </div>
        <div class="d-flex justify-content-center position-relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper ">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="swiper-slide bg-light rounded-3">
                            <div class="blog-card position-relative overflow-hidden">
                                <img src="img/100.png" alt="" class="w-100 rounded-top-3">
                                <div class="p-3">
                                    <h4 class="">Test {{ $i }}</h4>
                                    <p class=" text-center dec_team px-1">Lorem ipsum dolor, sit amet consectetur sit amet consectetur v </p>
                                </div>
                                <div class="row position-absolute hover-icon">
                                    <div class="col-12">
                                        <a href="#" class="text-white">
                                            <i class="bi bi-phone fs-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="text-white">
                                            <i class="bi bi-phone fs-2"></i>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="text-white">
                                            <i class="bi bi-phone fs-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="team-section2 mt-5">
            <div class="">
                <div class="row align-items-center custom-section">
                    <div class="col-md-6 col-lg-6 col-sm-12 ">
                        <div class="d-flex align-items-center mb-3 author">
                            <img src="img/image1.png" alt="Profile" class="profile-img me-3">
                            <h4 class="fw-bold">Ready to Boost Business & product Sales ?</h4>
                        </div>
                        <p class="text-white-50">
                            Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque
                            laudantium
                            totam.
                        </p>
                        <button class="custom-btn">Get Started Now <i class="bi bi-arrow-right"></i></button>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 ">
                        <div></div>
                        <img src="img/ready.png" alt="Chart Image" class="floating-img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('Home.components.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
