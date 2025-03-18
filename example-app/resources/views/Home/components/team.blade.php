 <section class="team-section1 pt-5">
    <div class="container">
        <div class="backgroud-team">
            <div class="text-center">
                <h2 class="fw-bold team-title" style="color: white">Team Member</h2>
                <p style="color: rgba(255, 255, 255, 0.479)" class="team-suptitle mb-5">Meet Our Professional Team Member</p>
            </div>
            <div class="swiper mySwiper ">
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
                                    <div class="col-12 mb-3">
                                        <a href="#" class="text-white ">
                                            <i class="bi bi-telephone fs-4 bg_icon"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="#" class="text-white">
                                            <i class="bi bi-facebook fs-4 bg_icon"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="#" class="text-white">
                                            <i class="bi bi-instagram fs-4 bg_icon"></i>
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