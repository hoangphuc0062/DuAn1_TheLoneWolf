@extends('layouts.app')
@section('title', 'chi tiec')
@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3 text-white">Chi tiết sản phẩm</h3>
                        <ul>
                            <li><a href="{{ route('user.index') }}" class="text-white">Trang chủ</a></li>
                            <li class="text-white">Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 col-custom">
                    <div class="product-details-img horizontal-tab">
                        <div class="pd-slider-nav product-slider">
                            <div class="single-thumb border">
                                <img src="{{ asset($products->image_features->first()->url_img) }}" alt="Product Thumbnail">
                            </div>
                        </div>
                        <div class="img__slider" style="display: flex; height: 100px;">
                            @for ($i = 0; $i < $products->image_features->count(); $i++)
                                <div class="img__item border-black" style="width:150px">
                                    <img src="{{ asset($products->image_features[$i]->url_img) }}" alt=""
                                        onclick="changeImage(this)">
                                </div>
                            @endfor
                        </div>
                    </div>
                    <script>
                        function changeImage(clickedImage) {
                            const mainImage = document.querySelector(".single-thumb img");
                            mainImage.src = clickedImage.src;
                        }
                    </script>

                </div>
                <div class="col-lg-7 col-custom">
                    <div class="product-summery position-relative">
                        <div class="product-head mb-3">
                            <h2 class="product-title">{{ $products->name }}</h2>
                        </div>
                        <div class="price-box mb-2">
                            <span class="regular-price">{{ number_format($products->price, 2, '.', ',') }}
                                VND</span>

                        </div>
                        <div class="product-rating mb-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="sku mb-3">
                            <span>SKU: 12345</span>
                        </div>
                        <p class="desc-content mb-5">{{ $products->description }}</p>
                        <div class="quantity-with_btn mb-4">
                            <div class="quantity">
                                <div class="cart-plus-minus">
                                    {{-- <form method="POST" action="{{ route('uesr.cart.add') }}">
                                        @csrf
                                        <input class="cart-plus-minus-box" value="0" type="text" id="quantityInput"
                                            name="quantity">

                                        <div class="dec qtybutton" onclick="decrementQuantity()">-</div>
                                        <div class="inc qtybutton" onclick="incrementQuantity()">+</div>
                                    </form> --}}
                                </div>
                            </div>

                            <script>
                                function incrementQuantity() {
                                    var input = document.getElementById('quantityInput');
                                    var currentValue = parseInt(input.value);
                                    input.value = currentValue + 1;
                                }

                                function decrementQuantity() {
                                    var input = document.getElementById('quantityInput');
                                    var currentValue = parseInt(input.value);

                                    if (currentValue > 0) {
                                        input.value = currentValue - 1;
                                    }
                                }
                            </script>
                            {{-- <form action="{{ Route('users.cart') }}" method="POST">
                                @csrf
                                <div class="add-to_cart">
                                    <input class="btn obrien-button primary-btn" type="button" value="Add to cart">
                                    <a class="btn obrien-button-2 treansparent-color pt-0 pb-0" href="wishlist.html">Add to
                                        wishlist</a>
                                </div>
                            </form> --}}
                        </div>
                        <div class="buy-button mb-5">
                            <a href="#" class="btn obrien-button-3 black-button">Buy it now</a>
                        </div>
                        <div class="social-share mb-4">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-no-text">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1"
                                role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2"
                                role="tab" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3"
                                role="tab" aria-selected="false">Shipping Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4"
                                role="tab" aria-selected="false">Size Chart</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="desc-content">
                                <p class="mb-3">On the other hand, we denounce with righteous indignation and dislike men
                                    who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded
                                    by desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                    equal blame belongs to those who fail in their duty through weakness of will, which is
                                    the same as saying through shrinking from toil and pain. These cases are perfectly
                                    simple and easy to distinguish. In a free hour, when our power of choice is untrammelled
                                    and when nothing prevents our being able to do what we like best, every pleasure is to
                                    be welcomed and every pain avoided. But in certain circumstances and owing to the claims
                                    of duty or the obligations of business it will frequently occur that pleasures have to
                                    be repudiated and annoyances accepted. The wise man therefore always holds in these
                                    matters to this principle of selection: he rejects pleasures to secure other greater
                                    pleasures, or else he endures pains to avoid worse pains.</p>
                                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                    possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                                    quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                                    voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur
                                    a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                                    perferendis doloribus asperiores repellat.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="product_tab_content  border p-3">
                                <div class="review_address_inner">
                                    <!-- Start Single Review -->
                                    <div class="pro_review mb-5">
                                        <div class="review_thumb">
                                            <img alt="review images" src="assets/images/review/1.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info mb-2">
                                                <div class="product-rating mb-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Admin - <span> December 19, 2020</span></h5>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex,
                                                vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus
                                                libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel.
                                                Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit
                                                amet quam tincidunt iaculis.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
                                <div class="rating_wrap">
                                    <h5 class="rating-title-1 mb-2">Add a review </h5>
                                    <p class="mb-2">Your email address will not be published. Required fields are marked
                                        *</p>
                                    <h6 class="rating-title-2 mb-2">Your Rating</h6>
                                    <div class="rating_list mb-4">
                                        <div class="review_info">
                                            <div class="product-rating mb-3">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End RAting Area -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">
                                            <form action="#" class="comment-form-area">
                                                <div class="row comment-input">
                                                    <div class="col-md-6 col-custom comment-form-author mb-3">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" required="required" name="Name">
                                                    </div>
                                                    <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="text" required="required" name="email">
                                                    </div>
                                                </div>
                                                <div class="comment-form-comment mb-3">
                                                    <label>Comment</label>
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </div>
                                                <div class="comment-form-submit">
                                                    <input type="submit" value="Submit"
                                                        class="comment-submit btn obrien-button primary-btn">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="shipping-policy">
                                <h4 class="title-3 mb-4">Shipping policy for our store</h4>
                                <p class="desc-content mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate</p>
                                <ul class="policy-list mb-2">
                                    <li>1-2 business days (Typically by end of day)</li>
                                    <li><a href="#">30 days money back guaranty</a></li>
                                    <li>24/7 live support</li>
                                    <li>odio dignissim qui blandit praesent</li>
                                    <li>luptatum zzril delenit augue duis dolore</li>
                                    <li>te feugait nulla facilisi.</li>
                                </ul>
                                <p class="desc-content mb-2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                    imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem
                                    insitam; est usus legentis in iis qui facit eorum</p>
                                <p class="desc-content mb-2">claritatem. Investigationes demonstraverunt lectores legere me
                                    lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur
                                    mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc
                                    putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                <p class="desc-content mb-2">seacula quarta decima et quinta decima. Eodem modo typi, qui
                                    nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <h4 class="title-3 mb-4">Size Chart</h4>
                                <table class="table border">
                                    <tbody>
                                        <tr>
                                            <td class="cun-name"><span>UK</span></td>
                                            <td>18</td>
                                            <td>20</td>
                                            <td>22</td>
                                            <td>24</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>European</span></td>
                                            <td>46</td>
                                            <td>48</td>
                                            <td>50</td>
                                            <td>52</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>usa</span></td>
                                            <td>14</td>
                                            <td>16</td>
                                            <td>18</td>
                                            <td>20</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Australia</span></td>
                                            <td>28</td>
                                            <td>10</td>
                                            <td>12</td>
                                            <td>14</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Canada</span></td>
                                            <td>24</td>
                                            <td>18</td>
                                            <td>14</td>
                                            <td>42</td>
                                            <td>36</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-area mb-text">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 m-auto text-center col-custom">
                    <div class="section-content">
                        <h2 class="title-1 text-uppercase">Related Product</h2>
                        <div class="desc-content">
                            <p>You can check the related product for your shopping collection.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($product->take(4) as $products)
                    <div class="col-md-3 col-sm-8 col-lg-3 col-custom product-area p-3">
                        <div class="single-product position-relative">
                            <div class="product-image">
                                <a class="d-block" href="{{ route('user.detail', ['id' => $products->id]) }}">


                                    <img src="{{ asset($products->image_features->first()->url_img) }}" alt=""
                                        class="product-image-1 w-100">
                                </a>
                            </div>
                            <div class="product-content" style="height: 160px">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-title">
                                    <h4 class="title-2"> <a href="#">{{ $products->name }}</a> </h4>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price ">{{ number_format($products->price, 2, '.', ',') }}
                                        VND</span>
                                </div>
                            </div>
                            <div class="add-action d-flex position-absolute">
                                <a href="cart.html" title="Add To cart"><i class="ion-bag"></i></a>
                                <a href="compare.html" title="Compare"><i class="ion-ios-loop-strong"></i></a>
                                <a href="wishlist.html" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View"><i
                                        class="ion-eye"></i></a>
                            </div>
                        </div>
                    </div>

                    @if ($loop->iteration % 3 == 0)
                        {{-- Add an empty column after every 3rd product --}}
                        <div class="w-100 d-none d-md-block d-lg-none"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
