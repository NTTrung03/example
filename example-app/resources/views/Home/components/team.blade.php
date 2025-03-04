 {{-- Team --}}
 <section class="team-section1">
    <div class="container">
        <div class="backgroud-team">
            <div class="text-center">
                <h2 class="fw-bold" style="color: white">Team Member</h2>
                <p style="color: rgba(255, 255, 255, 0.479)">Meet Our Professional Team Member</p>
            </div>
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper ">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="swiper-slide bg-light rounded-3">
                            <div class="blog-card position-relative overflow-hidden">
                                <img class=" rounded-top-3" src="img/daden.png" alt=""
                                    style="width: 100%">

                                <h4 class="px-1">Test {{ $i }}</h4>
                                <p class=" text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, illo
                                    exercitationem! Eius, minima quasi fugiat cupiditate ipsum similique amet ipsa
                                    provident!</p>
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
    </div>
    </div>
</section>