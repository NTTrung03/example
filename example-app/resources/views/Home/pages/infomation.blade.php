@extends('home.index')
@section('body')
    <section class="info-section pt-5 pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <h2 class="fw-bold">About Us</h2>
                    <p class="text-muted">
                        We are a leading technology company, specializing in providing modern software solutions to help
                        businesses develop sustainably.
                    </p>
                    <ul>
                        <li>Software & Application Development</li>
                        <li>Professional Website Design</li>
                        <li>E-Commerce Solutions</li>
                        <li>Technology Consulting & Digital Transformation</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/img/105.png" alt="Company Image" class="info-image w-100 rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light mb-5">
        <div class="container">
            <div class="p-5">
                <h2 class="fw-bold text-center mb-4">Mission & Vision</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fw-bold text-center">Mission</h4>
                        <p class="text-muted">
                            We are committed to providing smart technology solutions, helping businesses optimize
                            processes and improve performance.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-bold text-center">Vision</h4>
                        <p class="text-muted">
                            To become the leading technology company in the region, a pioneer in digital transformation and
                            software
                            development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="info-section mb-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Our Services</h2>
            <div class="row">
                <div class="col-md-4 ">
                    <img src="/img/103.png" alt="Service 1" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Software Development</h5>
                    <p class="text-muted">Create modern software products that meet business needs.</p>
                </div>
                <div class="col-md-4 ">
                    <img src="/img/103.png" alt="Service 2" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Website Design</h5>
                    <p class="text-muted">Providing professional, user-friendly website design solutions.</p>
                </div>
                <div class="col-md-4 ">
                    <img src="/img/103.png" alt="Service 3" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Technology Consulting</h5>
                    <p class="text-muted">Support businesses in digital transformation and applying technology to business.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light py-5 mb-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Our Team</h2>
            <div class="row text-center">
                <div class="col-md-4 team-member ">
                    <img src="/img/106.png" alt="CEO" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-2">Nguyễn Văn A</h5>
                    <p class="text-muted">CEO & Founder</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="/img/106.png" alt="CTO" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-2">Trần Thị B</h5>
                    <p class="text-muted">CTO</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="/img/106.png" alt="Marketing" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-2">Lê Văn C</h5>
                    <p class="text-muted">Marketing Manager</p>
                </div>
            </div>
        </div>
    </section>
@endsection
