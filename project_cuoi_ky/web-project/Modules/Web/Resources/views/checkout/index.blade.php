@extends('web::layouts.master')
@section('content')
    <div id="content" class="site-content bg-punch-light space-bottom-3 mt-13">
        <div class="col-full container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
                        <header class="entry-header space-top-2 space-bottom-1 mb-2">
                            <h4 class="entry-title font-size-7 text-center">Thanh toán</h4>
                        </header>

                        <div class="entry-content">
                            <div class="woocommerce">
                                <form id="collapseExample9" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="post">
                                    <div class="row d-flex">
                                        <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                            <input type="text" name="coupon_code1" class="input-text form-control" placeholder="Coupon code" id="coupon_code1" value="">
                                        </p>
                                        <p class="col-md-3 d-inline form-row form-row-last">
                                            <input type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0" name="apply_coupon" value="Apply coupon">
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                </form>
                                <form name="checkout" method="post" class="checkout woocommerce-checkout row mt-8" action="https://themes.woocommerce.com/storefront/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                                    <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                        <div class="px-4 pt-5 bg-white border">
                                            <div class="woocommerce-billing-fields">
                                                <h3 class="mb-4 font-size-3">Thông tin nhận hàng</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper row">
                                                    <p class="col-12 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label">Họ tên người nhận *</label>
                                                        <input type="text" class="input-text form-control" name="name" placeholder="" value="">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label">Email</label>
                                                        <input type="email" class="input-text form-control" name="email">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label">Phone number *</label>
                                                        <input type="text" class="input-text form-control" name="phone_number">
                                                    </p>
                                                    <p class="col-12 mb-4d75 form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                        <label for="billing_country" class="form-label">Tỉnh/Thành phố <abbr class="required" title="required">*</abbr></label>
                                                        <select name="billing_country" id="billing_country" class="form-control country_to_state country_select  select2-hidden-accessible" tabindex="-1">
                                                            <option value="">Chọn tỉnh/thành phố</option>
                                                            <option value="AX">Hà Nội</option>
                                                            <option value="AX">Hồ Chí Minh</option>
                                                        </select>
                                                    </p>
                                                    <p class="col-12 mb-3 form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                        <label for="billing_address_1" class="form-label">Địa chỉ *</label>
                                                        <input type="text" class="input-text form-control" name="billing_address_1" placeholder="Địa chỉ cụ thể khi nhận hàng" value="">
                                                    </p>
                                                    <p class="col-12 mb-3 form-row form-row-wide address-field validate-required">
                                                        <label for="order_comments" class="form-label">Ghi chú (không bắt buộc)</label>
                                                        <textarea name="order_comments" class="input-text form-control" id="order_comments" placeholder="Thêm ghi chú cho đơn hàng của bạn" rows="8" cols="5"></textarea>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 pt-5 bg-white border border-top-0 mt-n-one">
                                            <div class="woocommerce-additional-fields">
                                                <h3 class="mb-4 font-size-3">Thông tin thanh toán</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper row">
                                                    <div class="col-12 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                        <label for="billing_country" class="form-label">Loại thanh toán</label>
                                                        <select name="billing_country"class="form-control" disabled>
                                                            <option value="1" selected>Thẻ tín dụng</option>
                                                        </select>
                                                    </div>
                                                    <p class="col-12 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                        <label for="billing_first_name" class="form-label">Mã số thẻ *</label>
                                                        <input type="text" class="input-text form-control" name="name" placeholder="" value="">
                                                    </p>
                                                    <p class="col-lg-4 mb-4d75 form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                        <label for="billing_country" class="form-label">Tháng</label>
                                                        <select name="billing_country"class="form-control">
                                                            <option value="">---</option>
                                                            <option value="AX">1</option>
                                                            <option value="AX">2</option>
                                                            <option value="AX">3</option>
                                                            <option value="AX">4</option>
                                                            <option value="AX">5</option>
                                                        </select>
                                                    </p>
                                                    <p class="col-lg-4 mb-4d75 form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                        <label for="billing_country" class="form-label">Năm</label>
                                                        <select name="billing_country" id="billing_country" class="form-control">
                                                            <option value="">---</option>
                                                            <option value="AX">2020</option>
                                                            <option value="AX">2021</option>
                                                            <option value="AX">2022</option>
                                                            <option value="AX">2023</option>
                                                            <option value="AX">2024</option>
                                                        </select>
                                                    </p>
                                                    <p class="col-lg-4 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label">Mã CVV</label>
                                                        <input type="text" class="input-text form-control" name="phone_number">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 id="order_review_heading" class="d-none">Danh sách sản phẩm</h3>
                                    <div id="order_review" class="col-md-6 col-lg-5 col-xl-4 woocommerce-checkout-review-order">
                                        <div id="checkoutAccordion" class="border border-gray-900 bg-white mb-5">
                                            <div class="p-4d875 border">
                                                <div id="checkoutHeadingOnee" class="checkout-head">
                                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/checkout.html#" class="text-dark d-flex align-items-center justify-content-between collapsed" data-toggle="collapse" data-target="#checkoutCollapseOnee" aria-expanded="false" aria-controls="checkoutCollapseOnee">
                                                        <h3 class="checkout-title mb-0 font-weight-medium font-size-3">Danh sách sản phẩm</h3>
                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z"></path>
                                                        </svg>
                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div id="checkoutCollapseOnee" class="mt-4 checkout-content collapse" aria-labelledby="checkoutHeadingOnee" data-parent="#checkoutAccordion" style="">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead class="d-none">
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                Touchscreen MP3 Player&nbsp; <strong class="product-quantity">× 1</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>79.99</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                Happy Ninja&nbsp; <strong class="product-quantity">× 1</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>18.00</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <tfoot class="d-none">
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>97.99</span></td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>97.99</span></strong> </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="p-4d875 border">
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                    <tr class="order-total">
                                                        <th>Tổng</th>
                                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>97.99</span></strong> </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-row place-order">
                                            <a href="{{route('web.checkout.success')}}" class="button alt btn btn-dark btn-block rounded-0 py-4">Đặt hàng</a>
                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="926470d564"><input type="hidden" name="_wp_http_referer" value="/storefront/?wc-ajax=update_order_review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>

                </main>

            </div>

        </div>

    </div>
@endsection
