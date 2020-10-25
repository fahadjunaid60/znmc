@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Create Product')])

@section('content')
<div class="content">
    <div class="container-fluid">
     <div class="row align-items-center">
    <div class="col-lg-7 col-md-6 col-sm-8 ml-auto mr-auto">
          @if(Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{Session::get('success')}}</li>
                </ul>
            </div>
        @endif
    <form action="{{route('create-product')}}" class="form" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-success text-center">
            <h4 class="card-title"><strong>{{ __('Store Product') }}</strong></h4>
          </div>
          <div class="card-body ">
            <label class="mt-4">Select Brand</label>
            <div class="bmd-form-group{{ $errors->has('brand') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend bg-success">
                  <span class="input-group-text">
                      <i class="material-icons text-white">list</i>
                  </span>
                </div>
                <select name="brand" class="form-control">
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
              </div>
              @if($errors->has('brand'))
                <div id="name-error" class="error text-danger pl-3" for="brand" style="display: block;">
                  <strong>{{ $errors->first('nrand') }}</strong>
                </div>
              @endif
            </div>

            <label class="mt-4">Select Category</label>
            <div class="bmd-form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend bg-success">
                  <span class="input-group-text">
                      <i class="material-icons text-white">list</i>
                  </span>
                </div>
                <select name="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
              @if($errors->has('category'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('category') }}</strong>
                </div>
              @endif
            </div>

            <label class="mt-4">Product Name</label>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend bg-success">
                  <span class="input-group-text">
                    <i class="material-icons text-white">star</i>
                  </span>
                </div>
                <input type="text" name="productName" class="form-control" placeholder="{{ __('Type the product name...') }}" value="{{ old('productName') }}" required>
              </div>
              @if ($errors->has('productName'))
                <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
            <label class="mt-4">Product Description</label>
            <div class="bmd-form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend bg-success">
                  <span class="input-group-text">
                    <i class="material-icons text-white">info</i>
                  </span>
                </div>
                <textarea type="text" name="description" class="form-control" placeholder="{{ __('Type the product name...') }}" value="{{ old('description') }}" required></textarea>
              </div>
              @if ($errors->has('description'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('description') }}</strong>
                </div>
              @endif
            </div>

            <label class="mt-4">Upload Product Image</label>
            <div class="bmd-form-group{{ $errors->has('file') ? ' has-danger' : '' }}">

                <input type="file" name="file" class="form-control" placeholder="{{ __('Upload your product image') }}" value="{{ old('file') }}" required>

              @if ($errors->has('file'))
                <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('file') }}</strong>
                </div>
              @endif
            </div>

            <div class="form-check mr-auto text-center mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="stay" name="stay" {{ old('stay', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('Stay in this page after storing product') }}
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button id="submitProduct" class="btn btn-success btn-link btn-lg">{{ __('Create Now') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
    </div>
  </div>
@endsection
