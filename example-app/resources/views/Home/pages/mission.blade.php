@extends('home.index')
@section('body')

<section class="mission-section pt-5 pb-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <h2 class="fw-bold">Sứ Mệnh Của Chúng Tôi</h2>
                <p class="text-muted">
                    Chúng tôi cam kết mang đến những giải pháp công nghệ thông minh, giúp doanh nghiệp tối ưu hóa quy trình, nâng cao hiệu suất và tạo ra giá trị bền vững cho xã hội.
                </p>
                <ul>
                    <li>Thúc đẩy sự đổi mới và sáng tạo</li>
                    <li>Đưa công nghệ vào mọi khía cạnh của cuộc sống</li>
                    <li>Hỗ trợ doanh nghiệp chuyển đổi số</li>
                    <li>Đóng góp tích cực vào cộng đồng</li>
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
        <h2 class="fw-bold text-center mb-4">Giá Trị Cốt Lõi</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="value-box">
                    <img src="/img/108.png" alt="Innovation" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Sáng Tạo</h5>
                    <p class="text-muted">Luôn đổi mới để tạo ra các sản phẩm và dịch vụ vượt trội.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-box">
                    <img src="/img/108.png" alt="Integrity" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Hợp Tác</h5>
                    <p class="text-muted">Đồng hành cùng khách hàng và đối tác để cùng phát triển.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-box">
                    <img src="/img/108.png" alt="Sustainability" class="w-100 rounded-3 shadow-sm">
                    <h5 class="mt-3">Phát Triển Bền Vững</h5>
                    <p class="text-muted">Cam kết vì sự phát triển lâu dài và tác động tích cực đến xã hội.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mission-section mb-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Tác Động Đến Cộng Đồng</h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="fw-bold text-center">Hỗ Trợ Giáo Dục</h4>
                <p class="text-muted">
                    Chúng tôi tài trợ các chương trình giáo dục, giúp thế hệ trẻ tiếp cận công nghệ và phát triển kỹ năng lập trình.
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold text-center">Bảo Vệ Môi Trường</h4>
                <p class="text-muted">
                    Chúng tôi áp dụng công nghệ xanh, tối ưu hóa năng lượng và giảm thiểu tác động đến môi trường.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary text-white text-center py-5 mb-5">
    <h2 class="fw-bold">Cùng Nhau Xây Dựng Tương Lai</h2>
    <p>Hãy tham gia cùng chúng tôi để tạo ra những thay đổi tích cực.</p>
    <a href="/contact" class="btn btn-light">Liên Hệ Ngay</a>
</section>
@endsection