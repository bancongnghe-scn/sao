@php
    $bread_crums = ['Chiến lược' => '', 'Tầm nhìn, sứ mệnh' => '', 'Xem chi tiết' => ''];
@endphp
@extends('layouts.app',[
    'title' => 'Tầm nhìn, sứ mệnh'
])
@section('sidebar')
    @include('sao.sidebar')
@endsection
@section('css')
    @vite(['resources/css/sao/strategy/vision-mission-company.css'])
@endsection
@section('content')
<div class="container-fluid">
    <section class="section-mission">
        <h1>Khát vọng, sứ mệnh, tầm nhìn</h1>
        
        <div class="cards-container">
            <!-- Card 1: Khát vọng -->
            <div class="card">
                <img src="/images/telescope.png" alt="Telescope Icon" class="card-icon">
                <h2>KHÁT VỌNG</h2>
                <ul>
                    <li>1.Mang trí tuệ và sáng tạo việt lan tỏa toàn cầu</li>
                    <li>2.Trở thành doanh nghiệp việt <b>TIÊN PHONG ĐỊNH VỊ</b> trên "bản đồ thế giới về sx phim hoạt hình"</li>
                </ul>
            </div>

            <!-- Card 2: Sứ mệnh -->
            <div class="card">
                <img src="/images/mission.png" alt="Target Icon" class="card-icon">
                <h2>SỨ MỆNH</h2>
                <ul>
                    <li>1.<b>KẾT NỐI TẠO GIÁ TRỊ TRÊN TOÀN THẾ GIỚI.</b> Cam kết của chúng tôi:</li>
                    <li>2.Trở thành <b>TRẠM KẾT NỐI</b> nguồn lực tạo giá trị và phát triển cộng đồng sáng tạo toàn cầu</li>
                </ul>
            </div>

            <!-- Card 3: Tầm nhìn -->
            <div class="card">
                <img src="/images/vision.png" alt="Handshake Icon" class="card-icon">
                <h2>TẦM NHÌN</h2>
                <ul>
                    <li>Kiến tạo SCONNECT trở thành <b>Doanh nghiệp SÁNG TẠO TOÀN CẦU</b> - sáng tạo nhân vật hoạt hình, sản xuất phim và nội dung số chinh phục hàng tỷ khán giả khắp thế giới</li>
                </ul>
            </div>
        </div>
        <!-- Phần màu xanh bên dưới -->
        <div class="green-background"></div>
    </section>
</div>
@endsection
{{-- @section('js')
    @vite(['resources/js/sao/strategy/vision-mission.js'])
@endsection --}}