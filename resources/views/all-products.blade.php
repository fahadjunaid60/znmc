@extends('layouts.front-page.app', ['class' => 'off-canvas-sidebar','titlePage'=>'' , 'activePage' => 'home', 'title' => __('Material Dashboard')])
@section('content')
 <div class="container-fluid mt-5 productWrapper">
     <div class="row">
         <div class="col-lg-3 bg-light p-4 my-4 flt-prod">
          <div class="product-filter">
            <h4 class="text-dark mb-4 pb-4" style="border-bottom:1px solid rgba(0,0,0,0.1);">Search Filter <i class="fa fa-filter" aria-hidden="true"></i></h4>
              <div class="input-group-icon mt-2">
                  <h5 class="text-success">Product Category</h5>
                  <div class="form-select" id="default-select">
                      <select id="productCategory">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="input-group-icon mt-4">
                  <h5 class="text-success">Product Brands</h5>
                  <div class="form-select" id="default-select">
                      <select id="productBrand">
                          @foreach($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="mt-4">
                  <div class="form-select" id="default-select">
                    <button id="submitFilterProduct" class="genric-btn primary btn-block">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
              </div>
              <div class="mt-4">
                <small class="text-muted">Can't find a product that you are looking for?</small>
                <button id="contact-us" class="genric-btn success btn-block">CONTACT US <i class="fa fa-envelope" aria-hidden="true"></i></button>
              </div>
          </div>
      </div>

        <div class="col-lg-9">
            <div class="product-title-wrapper">
                <h2>All Products</h2>
            </div>
            <div class="row productList">
                @foreach($products as $product)
                <div class="col-lg-4 col-sm-6 p-3" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="single_offer text-center">
                        <img src="{{ asset('storage/images/products')}}/{{$product->image}}" style="width:270px" alt="product image" />
                        <div class="hover_text text-center">
                            <h4 class="text-success my-4">{{$product->name}} <i class="fa fa-align-right" aria-hidden="true"></i>
                            </h4>
                            <p class="my-4">
                            {{$product->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
     </div>
 </div>
@endsection
