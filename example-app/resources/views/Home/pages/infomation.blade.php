@extends('home.index')
@section('body')

    <section class="info-section pt-5 pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <h2 class="fw-bold">Về Chúng Tôi</h2>
                    <p class="text-muted">
                        Chúng tôi là công ty công nghệ hàng đầu, chuyên cung cấp các giải pháp phần mềm hiện đại giúp doanh
                        nghiệp phát triển bền vững.
                    </p>
                    <ul>
                        <li>Phát triển phần mềm & ứng dụng</li>
                        <li>Thiết kế website chuyên nghiệp</li>
                        <li>Giải pháp thương mại điện tử</li>
                        <li>Tư vấn công nghệ & chuyển đổi số</li>
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
                <h2 class="fw-bold text-center mb-4">Sứ Mệnh & Tầm Nhìn</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fw-bold text-center">Sứ Mệnh</h4>
                        <p class="text-muted">
                            Chúng tôi cam kết mang đến những giải pháp công nghệ thông minh, giúp doanh nghiệp tối ưu hóa
                            quy trình và nâng cao hiệu suất.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-bold text-center">Tầm Nhìn</h4>
                        <p class="text-muted">
                            Trở thành công ty công nghệ hàng đầu khu vực, tiên phong trong lĩnh vực chuyển đổi số và phát
                            triển phần mềm.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="info-section mb-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Dịch Vụ Của Chúng Tôi</h2>
            <div class="row">
                <div class="col-md-4 ">
                    <img src="/img/103.png" alt="Service 1" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Phát Triển Phần Mềm</h5>
                    <p class="text-muted">Tạo ra các sản phẩm phần mềm hiện đại, đáp ứng nhu cầu doanh nghiệp.</p>
                </div>
                <div class="col-md-4 ">
                    <img src="/img/103.png" alt="Service 2" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Thiết Kế Website</h5>
                    <p class="text-muted">Cung cấp giải pháp thiết kế website chuyên nghiệp, thân thiện với người dùng.</p>
                </div>
                <div class="col-md-4 ">
                    <img src="/img/103.png" alt="Service 3" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Tư Vấn Công Nghệ</h5>
                    <p class="text-muted">Hỗ trợ doanh nghiệp chuyển đổi số, ứng dụng công nghệ vào kinh doanh.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light py-5 mb-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Đội Ngũ Của Chúng Tôi</h2>
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
