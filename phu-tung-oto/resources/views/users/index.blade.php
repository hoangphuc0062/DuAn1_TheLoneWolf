@extends('layouts.app')
@section('title', 'trang chủ')
@section('content')
    <!--  Slider  -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/img-01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/img-05.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/img-02.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="call-to-action-area">
        <div class="container container-default custom-area">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item mt-0 d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-1.png') }}" alt="Icon" />
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Giao hàng tận nhà miễn phí</h3>
                            <p class="desc-content">
                                Cung cấp giao hàng tận nhà miễn phí cho tất cả các sản phẩm trên $100
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-2.png') }}" alt="Icon" />
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Chất lượng sản phẩm</h3>
                            <p class="desc-content">
                                Chúng tôi luôn đảm bảo chất lượng sản phẩm
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-custom">
                    <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                        <div class="call-to-action-icon">
                            <img src="{{ asset('assets/img/icons/icon-3.png') }}" alt="Icon" />
                        </div>
                        <div class="call-to-action-info">
                            <h3 class="action-title">Hỗ trợ trực tuyến</h3>
                            <p class="desc-content">
                                Để làm hài lòng khách hàng, chúng tôi cố gắng hỗ trợ trực tuyến
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action Area End Here -->
    <!-- Banner Area Start Here -->
    <div class="banner-area">
        <div class="container container-default custom-area">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style">
                        <a class="d-block" href="{{ route('users.shop') }}">
                            <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style">
                        <a class="d-block" href="{{ route('users.shop') }}">
                            <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-custom">
                    <div class="banner-image hover-style mb-0">
                        <a class="d-block" href="{{ route('users.shop') }}">
                            <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area mt-no-text mb-text-p">
        <div class="container container-default h-100 custom-area">
            <div class="row h-100">
                <div class="col-lg-8 col-xl-5 offset-xl-6 offset-lg-3 col-custom">
                    <div
                        class="newsletter-content text-center d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="section-content">
                            <h4 class="title-4 text-uppercase">
                                <span>ƯU ĐÃI</span> ĐẶC BIỆT KHI ĐĂNG KÝ
                            </h4>
                            <h2 class="title-3 text-uppercase">
                                NHẬN GIẢM GIÁ NGAY LẬP TỨC CHO THÀNH VIÊN
                            </h2>
                            <p class="desc-content">
                                Đăng ký bản tin của chúng tôi và tất cả các tin tức mới nhất về
                                <br />sản phẩm, khuyến mãi và ưu đãi mới nhất của chúng tôi
                            </p>
                        </div>
                        <div class="newsletter-form-wrap ml-auto mr-auto">
                            <form id="mc-form" class="mc-form d-flex position-relative">
                                <input type="email" id="mc-email" class="form-control email-box"
                                    placeholder="email@example.com" name="EMAIL" />
                                <button id="mc-submit"
                                    class="btn primary-btn obrien-button newsletter-btn position-absolute" type="submit">
                                    Đặt Mua
                                </button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div>
                                <!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area mt-text">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">BÁN CHẠY NHẤT</h2>
                        <div class="desc-content">
                            <p>
                                Tất cả các sản phẩm bán chạy nhất hiện đều có sẵn cho bạn và bạn có thể mua sản phẩm này từ
                                đây bất cứ lúc nào, bất cứ nơi nào, vì vậy hãy mua ngay bây giờ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product__card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-fullwidth-area mb-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-md-5 col-lg-6 text-center col-custom">
                    <div class="banner-thumb h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/product/product69.jpg') }}" alt="Banner Thumb" />
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 text-center justify-content-center col-custom">
                    <div class="banner-flash-content d-flex flex-column align-items-center justify-content-center h-100">
                        <h2 class="deal-head text-uppercase">ƯU ĐÃI CHỚP NHOÁNG
                        </h2>
                        <h3 class="deal-title text-uppercase">
                            HÃY NHANH TAY ĐỂ ĐƯỢC GIẢM GIÁ 25%
                        </h3>
                        <a href="{{ route('users.shop') }}" class="obrien-button primary-btn">Mua Ngay</a>
                        <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <div class="product-area mb-text">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">BLOG MỚI NHẤT</h2>
                        <div class="desc-content">
                            <p>
                                Tất cả các sản phẩm bán chạy nhất hiện đều có sẵn cho bạn và bạn có thể mua sản phẩm này từ
                                đây bất cứ lúc nào, bất cứ nơi nào, vì vậy hãy mua ngay bây giờ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product__card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/img/product/product69.jpg') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tên</h5>
                        <p class="card-text">Gía</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link"><i class="bi bi-bag-plus"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-eye"></i></a>
                        <a href="#" class="card-link"><i class="bi bi-heart"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- blog --}}
    <div class="latest-blog-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">BLOG MỚI NHẤT</h2>
                        <div class="desc-content">
                            <p>
                                Nếu bạn muốn biết về sản phẩm hữu cơ thì hãy theo dõi blog của chúng tôi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-custom">
                    <div class="obrien-slider">
                        <div class="single-blog">
                            <div class="single-blog-thumb">
                                <a href="blog.html">
                                    <img class="w-100" src ="{{ asset('assets/img/product/product69.jpg') }}"
                                        alt="Blog Image" />
                                </a>
                            </div>
                            <div class="single-blog-content position-relative">
                                <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                    <span>14</span>
                                    <span>01</span>
                                </div>
                                <div class="post-meta">
                                    <span class="author">Author: Obrien Demo Admin</span>
                                </div>
                                <h2 class="post-title">
                                    <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                        Available</a>
                                </h2>
                                <p class="desc-content">
                                    Contrary to popular belief, Lorem Ipsum is not simply
                                    random text. It has roots in a piece of classical Latin
                                    literature from 45 BC, making...
                                </p>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-thumb">
                                <a href="blog.html">
                                    <img class="w-100" src="{{ asset('assets/img/product/product69.jpg') }}"
                                        alt="Blog Image" />
                                </a>
                            </div>
                            <div class="single-blog-content position-relative">
                                <div class="post-date text-center border rounded d-flex flex-column position-absolute">
                                    <span>14</span>
                                    <span>01</span>
                                </div>
                                <div class="post-meta">
                                    <span class="author">Author: Obrien Demo Admin</span>
                                </div>
                                <h2 class="post-title">
                                    <a href="blog.html">There Are Many Variation of Passages of Lorem Ipsum
                                        Available</a>
                                </h2>
                                <p class="desc-content">
                                    Contrary to popular belief, Lorem Ipsum is not simply
                                    random text. It has roots in a piece of classical Latin
                                    literature from 45 BC, making...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
