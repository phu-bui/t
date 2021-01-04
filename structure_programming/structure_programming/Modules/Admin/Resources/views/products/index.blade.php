@extends('admin::layouts.master')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-box2 icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Quản lý sản phẩm
                        <div class="page-title-subheading">
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">

                        </h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá gốc</th>
                                        <th>Giá khuyến mãi</th>
                                        <th>Tình trạng</th>
                                        <th>Sửa/Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $index => $product)
                                    <tr>
                                        <th scope="row">{{$index + 1}}</th>
                                        <td><img width="60" class="" src="{{$product->image}}" alt=""></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{($product->cost_price)}}</td>
                                        <td>{{($product->price)}}</td>
                                        <td>
                                            @if(isset($product->quantity) && $product->quantity->quantity > 0)
                                                <div class="mb-2 mr-2 badge badge-success">Còn hàng</div>
                                            @else
                                                <div class="mb-2 mr-2 badge badge-danger">Hết hàng</div>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('admin.delete_product', array('product_id'=>$product->id))}}">
                                                <button class="mb-2 mr-2 btn-transition btn btn-outline-success" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này không?')" >Xóa</button>
                                            </form>
                                            <form action="{{route('admin.edit_product', array('product_id'=>$product->id))}}"><button class="mb-2 mr-2 btn-transition btn btn-outline-primary">Chi tiết</button></form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-block text-center card-footer">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
