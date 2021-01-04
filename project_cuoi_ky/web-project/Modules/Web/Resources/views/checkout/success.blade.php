@extends('web::layouts.master')
@section('content')
    <main id="content" class="mt-13">
        <div class="bg-gray-200 space-bottom-3">
            <div class="container">
                <div class="py-5 py-lg-7">
                    <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Đặt hàng thành công</h6>
                </div>
                <div class="max-width-890 mx-auto">
                    <div class="bg-white pt-6 border">
                        <h6 class="font-size-3 font-weight-medium text-center mb-4 pb-xl-1">Cám ơn bạn đã đặt hàng trên hệ thống chúng tôi.</h6>
                        <div class="border-bottom mb-5 pb-5 overflow-auto overflow-md-visible">
                            <div class="pl-3">
                                <?php
                                $subtotal = 0;
                                foreach($order_lines as $order_line){
                                        $subtotal += $order_line->order_price;
                                        }
                                ?>
                                @foreach($order as $order)

                                <table class="table table-borderless mb-0 ml-1">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0">Mã đơn hàng: </th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0">Ngày đặt: </th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-center">Total: </th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-right pr-md-9">Payment method:</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{$order->order_no}}</th>
                                        <td class="pr-0 py-0 font-weight-medium">{{$order->ordered_at}}</td>
                                        <td class="pr-0 py-0 font-weight-medium text-md-center">{{$subtotal}} VND</td>
                                        <td class="pr-md-4 py-0 font-weight-medium text-md-right">Thanh toán khi nhận </td>
                                    </tr>
                                    </tbody>
                                </table>
                                @endforeach

                            </div>
                        </div>
                        <div class="border-bottom mb-5 pb-6">
                            <div class="px-3 px-md-4">
                                <div class="ml-md-2">
                                    <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Chi tiết đơn hàng</h6>
                                    @foreach($order_lines as $order_line)
                                    <div class="d-flex justify-content-between mb-4">
                                        <div class="d-flex align-items-baseline">
                                            <div>
                                                <h6 class="font-size-2 font-weight-normal mb-1">{{$order_line->title}} <br> </h6>
                                                <span class="font-size-2 text-gray-600">({{$order_line->name}})</span>
                                            </div>
                                            <span class="font-size-2 ml-4 ml-md-8">x{{$order_line->quantity}}</span>
                                        </div>
                                        <span class="font-weight-medium font-size-2">{{$order_line->order_price}} VND</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-5 pb-5">
                            <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                                <li class="d-flex justify-content-between py-2">
                                    <span class="font-weight-medium font-size-2">Subtotal:</span>
                                    <span class="font-weight-medium font-size-2">{{$subtotal}} VND</span>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <span class="font-weight-medium font-size-2">Shipping:</span>
                                    <span class="font-weight-medium font-size-2">Miễn phí</span>
                                </li>
                                <li class="d-flex justify-content-between pt-2">
                                    <span class="font-weight-medium font-size-2">Payment Method:</span>
                                    <span class="font-weight-medium font-size-2">Thanh toán khi nhận hàng</span>
                                </li>
                            </ul>
                        </div>
                        <div class="border-bottom mb-5 pb-4">
                            <div class="px-3 pl-md-5 pr-md-4">
                                <div class="d-flex justify-content-between">
                                    <span class="font-size-2 font-weight-medium">Total</span>
                                    <span class="font-weight-medium fon-size-2">{{$subtotal}} VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-xl-1">
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col">
                                    <div class="mb-6 mb-md-0">
                                        <h6 class="font-weight-medium font-size-22 mb-3">Billing Address
                                        </h6>
                                        <address class="d-flex flex-column mb-0">
                                            <span class="text-gray-600 font-size-2">Hà Nội</span>
                                            <span class="text-gray-600 font-size-2">Số 1 Đại Cồ Việt, Hai Bà Tr</span>
                                            <span class="text-gray-600 font-size-2">0986868686</span>
                                            <span class="text-gray-600 font-size-2">hust@hust.edu.vn</span>
                                            <span class="text-gray-600 font-size-2">Đại học Bách Khoa Hà Nội</span>
                                        </address>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="font-weight-medium font-size-22 mb-3">Shipping Address
                                    </h6>
                                    @foreach($shipping as $ship)
                                    <address class="d-flex flex-column mb-0">
                                        <span class="text-gray-600 font-size-2">{{$ship->province}}</span>
                                        <span class="text-gray-600 font-size-2">{{$ship->address}}</span>
                                        <span class="text-gray-600 font-size-2">{{$ship->receiver_phone_number}} </span>
                                        <span class="text-gray-600 font-size-2">{{$ship->receiver_email}}</span>
                                        <span class="text-gray-600 font-size-2">{{$ship->receiver_name}}</span>
                                    </address>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
