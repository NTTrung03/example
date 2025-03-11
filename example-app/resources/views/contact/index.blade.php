<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('Home.components.header');
    <section class=" container ">
        <div class="text-center ">
            <h1 class="p-3 fw-bold">Get in Touch</h1>
            <p>Have a project in mind? To request a quote contact us directly or fill out <br> the form and let us know
                how we can help.</p>
        </div>
        <div class="">
            <div class="d-flex justify-content-center icon_share">
                <div class="bg-light p-2 mx-1 rounded-3">
                    <a class="text-center"
                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        class="me-4" target="_blank">
                        <i class="bi bi-facebook fs-4"></i>
                    </a>
                </div>
                <div class="bg-light p-2 mx-1 rounded-3">
                    <a class="text-center" href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}"
                        class="me-4" target="_blank">
                        <i class="bi bi-twitter fs-4"></i>
                    </a>

                </div>
                <div class="bg-light p-2 mx-1 rounded-3">
                    <a class="text-center"
                        href="https://www.tiktok.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                        class="me-4" target="_blank">
                        <i class="bi bi-tiktok fs-4"></i>

                </div>
                <div class="bg-light p-2 mx-1 rounded-3">

                    <a class="text-center" href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}"
                        class="me-4" target="_blank">
                        <i class="bi bi-whatsapp fs-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 mt-4 contact-mail1">
                <div class=" d-flex justify-content-center"> 
                    <div class="">
                        <div class="mail-icon">
                            <i class="bi bi-envelope fs-3"></i>
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class=" text-center mt-2">
                            <p class="h4 text-muted">Please feel free to drop us a line. <br> We will respond as soon as  possible.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center mt-2 ">
                            <div class="">
                                <a href="#" class="text-decoration-none shadow-sm email-btn">Send Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 mt-4 contact-mail2">
                <div class=" d-flex justify-content-center"> 
                    <div class="">
                        <div class="mail-icon">
                            <i class="bi bi-phone-vibrate fs-3"></i>
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class=" text-center mt-2">
                            <p class="h4 text-muted">If you need immediate assistance<br> feel free to call us any time.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center mt-2 ">
                            <div class="">
                                <a href="#" class="text-decoration-none shadow-sm email-btn">Call us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="container mt-5">
        <div class="row">
            <div class="col-8"> 
                <div class="bg-light">a</div>
            </div>
            <div class="col-4">
                <div class="bg-light">a</div>
            </div>
        </div>
    </section> --}}

    <section class="contact-questions mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-3">
                    <div class="text-center ">
                        <h2 class="fw-bold">Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="accordion accordion-flush " id="accordionFlushExample">
                        <!-- Accordion 1 -->
                        <div class="accordion-item mb-2 rounded-3">
                            <h2 class="accordion-header" id="flush-headingOne ">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nội dung của Accordion 1.</div>
                            </div>
                        </div>
                        <!-- Accordion 2 -->
                        <div class="accordion-item mb-2 rounded-3">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nội dung của Accordion 2.</div>
                            </div>
                        </div>
                        <!-- Accordion 3 -->
                        <div class="accordion-item mb-2 rounded-3">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nội dung của Accordion 3.</div>
                            </div>
                        </div>
                        <!-- Accordion 4 -->
                        <div class="accordion-item mb-2 rounded-3">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Accordion Item #4
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nội dung của Accordion 4.</div>
                            </div>
                        </div>
                        <!-- Accordion 5 -->
                        <div class="accordion-item mb-5 rounded-3">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Accordion Item #5
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Nội dung của Accordion 5.</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    @include('Home.components.footer');
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
