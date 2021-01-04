@extends('admin::layouts.master')

@section('content')

<h3 align="center">Add Product</h3>
<div align="center">
<form class="form-horizontal" action="{{route('admin.save_product')}}" method="post">
    {{csrf_field()}}
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_sku">PRODUCT SKU</label>
            <div class="col-md-4">
                <input id="product_sku" name="product_sku" placeholder="PRODUCT SKU" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!--- Select brand --->
        <div class="form-group">
            <label class="col-md-4 control-label" for="brand_id">BRAND ID</label>
            <div class="col-md-4">
                <select id="brand_id" name="brand_id" class="form-control">
                    @foreach($brand_product as $key => $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Slug input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="slug">SLUG</label>
            <div class="col-md-4">
                <input id="slug" name="slug" placeholder="SLUG" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">NAME</label>
            <div class="col-md-4">
                <input id="name" name="name" placeholder="NAME" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Input image -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="image">IMAGE</label>
            <div class="col-md-4">
                <input id="image" name="image" placeholder="INPUT LINK IMAGE" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Price input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="price">PRICE</label>
            <div class="col-md-4">
                <input id="price" name="price" placeholder="PRICE" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Cost Price input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="price">COST PRICE</label>
            <div class="col-md-4">
                <input id="cost_price" name="cost_price" placeholder="COST PRICE" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Short description input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="price">SHORT DESCRIPTION</label>
            <div class="col-md-4">
                <input id="short_description" name="short_description" placeholder="SHORT DESCRIPTION" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Long description Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="long_description">LONG DESCRIPTION</label>
            <div class="col-md-4">
                <textarea class="form-control" id="long_description" name="long_description"></textarea>
            </div>
        </div>

        <!-- Vote input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="vote">Vote</label>
            <div class="col-md-4">
                <input id="vote" name="vote" placeholder="VOTE" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Status input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="status">STATUS</label>
            <div class="col-md-4">
                <input id="status" name="status" placeholder="STATUS" class="form-control input-md" required="" type="text">

            </div>
        </div>



        <!-- Search input
        <div class="form-group">
            <label class="col-md-4 control-label" for="tutorial_fr">TUTORIAL FR</label>
            <div class="col-md-4">
                <input id="tutorial_fr" name="tutorial_fr" placeholder="TUTORIAL FR" class="form-control input-md" required="" type="search">

            </div>
        </div>
        --->
    </fieldset>
    <button class="mt-1 btn btn-primary">Submit</button>

</form>
</div>
@endsection
