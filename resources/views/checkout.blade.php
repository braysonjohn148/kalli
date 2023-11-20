<!DOCTYPE html>
<html lang="en">
@include('includes/header')

<body class="has-smround-btns has-loader-bg equal-height has-sm-container">
    @include('includes/title')
    
    <div class="page-content">
        <div class="holder breadcrumbs-wrap mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Checkout</span></li>
                </ul>
            </div>
        </div>
        <div class="holder">
            <div class="container">
                <h1 class="text-center">Checkout wizard</h1>
				<form action="/place-order" method="POST">
					@csrf
                <div class="row"> 
					
                    <div class="col-md-10">
                        <div class="steps-progress">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#step1"
                                        data-step="1"><span>01.</span><span>Shipping Address</span></a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#step3"
                                        data-step="3"><span>02.</span><span>Delivery Method</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#step4"
                                        data-step="4"><span>03.</span><span>Payment Method</span></a>
                                </li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1"
                                    aria-valuemin="1" aria-valuemax="5" style="width: 25%;"></div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="step1">
                                <div class="tab-pane-inside">
                                    {{-- <p><a href="account-create.html">Login</a> or <a
                                            href="account-create.html">Register</a> for faster payment.</p> --}}
                                    <div class="row mt-2">
                                        <div class="col-sm-9">
                                            <label>First Name:</label>
                                            <div class="form-group">
                                                <input type="text" name="first_name" class="form-control form-control--sm">
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <label>Last Name:</label>
                                            <div class="form-group">
                                                <input type="text" name="last" class="form-control form-control--sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <label>Country:</label>
                                    <div class="form-group select-wrapper">
                                        <select name="country" class="form-control form-control--sm"> 
                                            <option value="Tanzania">Tanzania</option> 
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <label>Region:</label>
                                            <div class="form-group select-wrapper">
                                                <select  name="region" class="form-control form-control--sm">
                                                    <option value="dar">Dar es Salaam</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <label>District:</label>
                                            <div class="form-group">
                                                <select  name="district" class="form-control form-control--sm">
                                                    <option value="Ilala District">Ilala District</option>  
                                                    <option value="Kigamboni District">Kigamboni District</option>  
                                                    <option value="Kinondoni District">Kinondoni District</option>  
                                                    <option value="Temeke District">Temeke District</option>  
                                                    <option value="Ubungo District">Ubungo District</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <label>Address 1:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm">
                                    </div>
                                    <div class="clearfix">
                                        <input id="formcheckoutCheckbox1" name="checkbox1" type="checkbox">
                                        <label for="formcheckoutCheckbox1">Save address to my account</label>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-sm step-next">Continue</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="step2">
                                <div class="tab-pane-inside">
                                    <div class="clearfix">
                                        <input id="formcheckoutCheckbox2" name="checkbox2" type="checkbox">
                                        <label for="formcheckoutCheckbox2">The same as shipping address</label>
                                    </div>
                                    <div class="mt-2"></div>
                                    <label>Country:</label>
                                    <div class="form-group select-wrapper">
                                        <select class="form-control form-control--sm">
                                            <option value="Tanzania">Tanzania</option> 
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <label>State:</label>
                                            <div class="form-group select-wrapper">
                                                <select class="form-control form-control--sm">
                                                    <option value="Dar es Salaam">Dar es Salaam</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <label>zip/postal code:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control--sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2"></div>
                                    <label>Address 1:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm">
                                    </div>
                                    <div class="mt-2"></div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-sm step-next">Continue</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="step3">
                                <div class="tab-pane-inside">
                                    <div class="clearfix">
                                        <input id="formcheckoutRadio1" value="" name="radio1" type="radio"
                                            class="radio" checked="checked">
                                        <label for="formcheckoutRadio1">Standard Delivery TZS 3,000 (1-2 days)</label>
                                    </div>
                                    <div class="clearfix">
                                        <input id="formcheckoutRadio2" value="" name="radio1" type="radio"
                                            class="radio">
                                        <label for="formcheckoutRadio2">Express Delivery TZS 10,000 (Same days delivery)</label>
                                    </div> 
                                    <div class="text-right">
                                        <button type="button" class="btn btn-sm step-next">Continue</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="step4">
                                <div class="tab-pane-inside">  
									<div class="row mt-4 mb-4">
										<div class="px-2"> <img style="width:100px;" src="{{url('images/tigo.png')}}" alt="">
										</div>
										<div class="px-2"> <img style="width:100px;" src="{{url('images/mpesa.png')}}"
												alt=""></div>
										<div class="px-2"> <img style="width:100px;" src="{{url('images/airtel-money.webp')}}"
												alt=""></div>
									</div>
                                    <div class="mt-2"></div>
                                    <label>Payment Phone Number</label>
                                    <div class="form-group">
                                        <input type="text"  name="phone" class="form-control form-control--sm">
                                    </div> 
                                </div>
								
                                <div class="clearfix mt-1 mt-md-2">
                                    <button type="submit" class="btn btn--lg w-100">Send payment push to Phone Number</button>
                                </div>
                            </div>
                        </div>
                    </div> 
					</form>
                    <div class="col-md-8 pl-lg-8 mt-2 mt-md-0">
                        <h2 class="custom-color">Order Summary</h2>
                        <div class="cart-table cart-table--sm pt-3 pt-md-0">
                            <div class="cart-table-prd cart-table-prd--head py-1 d-none d-md-flex">
                                <div class="cart-table-prd-image text-center">Image</div>
                                <div class="cart-table-prd-content-wrap">
                                    <div class="cart-table-prd-info">Name</div> 
                                    <div class="cart-table-prd-price">Price</div>
                                </div>
                            </div>
							@php	
								$total_amount =  0;
								@endphp
                            @foreach ($carts as $cart)
								@php	
								$total_amount =  $total_amount + $cart->price;
								@endphp
							<div class="cart-table-prd">
								<div class="cart-table-prd-image">
									<a href="#" class="prd-img"><img class="lazyload fade-up"
											src="{{$cart->photos[0] ?? ''}}" 
											alt=""></a>
								</div>
								<div class="cart-table-prd-content-wrap">
									<div class="cart-table-prd-info">
										<h2 class="cart-table-prd-name"><a href="product.html">{{$cart->name}}</a></h2>
									</div> 
									<div class="cart-table-prd-price-total">{{number_format($cart->price)}} TZS</div>
								</div>
							</div> 
							@endforeach
                        </div>
                        <div class="mt-2"></div>
                        {{-- <div class="card">
                            <div class="card-body">
                                <h3>Apply Promocode</h3>
                                <p>Got a promo code? Then you're a few randomly combined numbers & letters away from fab
                                    savings!</p>
                                <div class="form-inline mt-2">
                                    <input type="text" class="form-control form-control--sm"
                                        placeholder="Promotion/Discount Code">
                                    <button type="submit" class="btn">Apply</button>
                                </div>
                            </div>
                        </div> --}}
                        <div class="mt-2"></div>
                        <div class="cart-total-sm">
                            <span>Subtotal</span> 
                            <span class="card-total-price">{{number_format($total_amount)}} TZS</span>
                        </div>
                        <div class="mt-2"></div>
                        <div class="card">
                            <div class="card-body">
                                <h3>Order Comment</h3>
                                <textarea class="form-control form-control--sm textarea--height-100" placeholder="Place your comment here"></textarea>
                                <div class="card-text-info mt-2">
                                    <p>*Savings include promotions, coupons, rueBUCKS, and shipping (if applicable).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes/footer')
    <div class="footer-sticky">
        <div class="sticky-addcart js-stickyAddToCart closed">
            <div class="container">
                <div class="row">
                    <div class="col-auto sticky-addcart_image">
                        <a href="product.html">
                            <img src="images/skins/fashion/products/product-01-1.webp" alt="" />
                        </a>
                    </div>
                    <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                        <h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
                        <div class="sticky-addcart_price">
                            <span class="sticky-addcart_price--actual">$180.00</span>
                            <span class="sticky-addcart_price--old">$210.00</span>
                        </div>
                    </div>
                    <div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
                        <div class="select-wrapper">
                            <select class="form-control form-control--sm">
                                <option value="">--Please choose an option--</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto sticky-addcart_actions">
                        <div class="prd-block_qty">
                            <span class="option-label">Quantity:</span>
                            <div class="qty qty-changer">
                                <button class="decrease"></button>
                                <input type="number" class="qty-input" value="1" data-min="1"
                                    data-max="1000">
                                <button class="increase"></button>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
            <div class="container">
                <div class="row">
                    <div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
                    <div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i
                            class="icon-basket"></i></div>
                    <div class="col-auto popup-addedtocart_logo">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="images/logo-white-sm.webp" class="lazyload fade-up" alt="">
                    </div>
                    <div class="col popup-addedtocart_info">
                        <div class="row">
                            <a href="product.html" class="col-auto popup-addedtocart_image">
                                <span class="image-container w-100">
                                    <img src="images/skins/fashion/products/product-01-1.webp" alt="" />
                                </span>
                            </a>
                            <div class="col popup-addedtocart_text">
                                <a href="product.html" class="popup-addedtocart_title"></a>
                                <span class="popup-addedtocart_message">Added to <a href="cart.html"
                                        class="underline">Cart</a></span>
                                <span class="popup-addedtocart_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto popup-addedtocart_actions">
                        <span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop"
                            data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a>
                        <span>or</span> <a href="checkout.html" class="btn btn--invert btn--sm"><i
                                class="icon-envelope-1"></i><span>Check out</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
            <div class="container">
                <div class="row">
                    <div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i>
                    </div>
                    <div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
                        <a href="#" data-caption="">
                            <span class="image-container"><img src="#" alt="" /></span>
                        </a>
                    </div>
                    <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                        <h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
                        <div class="sticky-addcart_price">
                            <span class="sticky-addcart_price--actual"></span>
                            <span class="sticky-addcart_price--old"></span>
                        </div>
                        <div class="sticky-addcart_error_message">Error Message</div>
                    </div>
                    <div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
                        <div class="select-wrapper">
                            <select class="form-control form-control--sm sticky-addcart_options_select">
                                <option value="none">Select Option please..</option>
                            </select>
                            <div class="invalid-feedback">Can't be blank</div>
                        </div>
                    </div>
                    <div class="col-auto sticky-addcart_actions">
                        <div class="prd-block_qty">
                            <span class="option-label">Quantity:</span>
                            <div class="qty qty-changer">
                                <button class="decrease"></button>
                                <input type="number" class="qty-input" value="2" data-min="1"
                                    data-max="10000">
                                <button class="increase"></button>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn js-prd-addtocart">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
            <i class="icon icon-angle-up"></i>
        </a>
        <div class="loader-horizontal js-loader-horizontal">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
            </div>
        </div>
    </div>
    <div class="footer-sticky">
        <div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000"
            data-delay="500" data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown"
            data-products='[{"productname":"Leather Pegged Pants", "productlink":"product.html","productimage":"images/skins/fashion/products/product-01-1.webp"},{"productname":"Black Fabric Backpack", "productlink":"product.html","productimage":"images/skins/fashion/products/product-28-1.webp"},{"productname":"Combined Chunky Sneakers", "productlink":"product.html","productimage":"images/skins/fashion/products/product-23-1.webp"}]'>
            <div class="payment-notification payment-notification--squared">
                <div class="payment-notification-inside">
                    <div class="payment-notification-container">
                        <a href="#" class="payment-notification-image js-pn-link">
                            <img src="images/products/product-01.webp" class="js-pn-image" alt="">
                        </a>
                        <div class="payment-notification-content-wrapper">
                            <div class="payment-notification-content">
                                <div class="payment-notification-text">Someone purchased</div>
                                <a href="product.html"
                                    class="payment-notification-name js-pn-name js-pn-link">Applewatch</a>
                                <div class="payment-notification-bottom">
                                    <div class="payment-notification-when"><span class="js-pn-time">32</span> min ago
                                    </div>
                                    <div class="payment-notification-from">from <span
                                            class="js-pn-from">Riverside</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-notification-close"><i class="icon-close-bold"></i></div>
                    <div class="payment-notification-qw prd-hide-mobile js-prd-quickview"
                        data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i></div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/vendor-special/lazysizes.min.js"></script>
    <script src="js/vendor-special/ls.bgset.min.js"></script>
    <script src="js/vendor-special/ls.aspectratio.min.js"></script>
    <script src="js/vendor-special/jquery.min.js"></script>
    <script src="js/vendor-special/jquery.ez-plus.js"></script>
    <script src="js/vendor/vendor.min.js"></script>
    <script src="js/app-html.js"></script>
</body>

</html>
