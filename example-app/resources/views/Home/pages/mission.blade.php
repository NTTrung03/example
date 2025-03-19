@extends('home.index')
@section('body')
    <section class="mission-section pt-5 pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <h2 class="fw-bold">Our Mission</h2>
                    <p class="text-muted">
                        We are committed to providing smart technology solutions, helping businesses optimize processes,
                        improve performance and create sustainable value for society.
                    </p>
                    <ul>
                        <li>Promoting innovation and creativity</li>
                        <li>Bringing technology into every aspect of life</li>
                        <li>Supporting businesses in digital transformation</li>
                        <li>Contributing positively to the community</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="/img/107.png" alt="Mission Image" class="mission-image w-100 rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light mt-5 mb-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4 p-3">Core Values</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="value-box">
                        <img src="/img/108.png" alt="Innovation" class="w-100 rounded-3 shadow-sm">
                        <h5 class="mt-3">Innovation</h5>
                        <p class="text-muted">Always innovate to create outstanding products and services.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box">
                        <img src="/img/108.png" alt="Integrity" class="w-100 rounded-3 shadow-sm">
                        <h5 class="mt-3">Cooperation</h5>
                        <p class="text-muted">Accompanying customers and partners for mutual development.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box">
                        <img src="/img/108.png" alt="Sustainability" class="w-100 rounded-3 shadow-sm">
                        <h5 class="mt-3">Sustainable Development</h5>
                        <p class="text-muted">Committed to long-term development and positive impact on society.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section mb-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Community Impact</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="fw-bold text-center">Educational Support</h4>
                    <p class="text-muted">
                        We sponsor educational programs, helping the younger generation access technology and develop
                        programming skills.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-bold text-center">Environmental Protection</h4>
                    <p class="text-muted">
                        We apply green technology, optimize energy and minimize environmental impact.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary text-white text-center py-5 mb-5">
        <h2 class="fw-bold">Building the Future Together</h2>
        <p>Join us to make positive changes.</p>
        <a href="/contact" class="btn btn-light">Contact Now</a>
    </section>
@endsection
