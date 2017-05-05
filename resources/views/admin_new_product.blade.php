@extends('layouts.app')

@section('content')
<div class="container site_content new_product_page admin_cms_page">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h3>Create New product</h3>
            <form action="/admin_create_new_product"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
               
               
                <div class="form-wrapper">
                    <div class="form-item">
                        <label >Title</label>
                        <input type="text"  name="product_title" required /> 
                    </div>
                      <div class="form-item">
                        <label >Subtitle</label>
                        <input type="text"  name="product_subtitle" required /> 
                    </div>
                    <div class="form-item">
                        <label>Product description</label>
                        <textarea name="product_description" required></textarea> 
                    </div>
                      <div class="form-item">
                        <label>Price</label>
                        <input type="number" name="product_price" required /> 
                    </div>

                    <div class="form-item">
                        <label>Image upload</label>
                        <input type="file" name="imgUpload" id="imgUpload" required>
                    </div>
                </div>
                <div class="form-group">
                <button type="submit" class="checkout_submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop