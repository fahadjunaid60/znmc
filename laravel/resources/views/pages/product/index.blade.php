@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Products')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success">
               {{Session::get('success')}}
            </div>
        @endif
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Product List</h4>
              <a href="{{route('create-product')}}" class="btn btn-dark btn-flat">Create New Product</a>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-success">
                  <th>ID</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->brand}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->created_at}}</td>
                            <td class="td-actions text-right">
                                <a type="button" href="{{'product/edit/'.$item->id}}" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                                <a href="/product/destroy/{{$item->id}}" class="btn btn-danger btn-link btn-sm">
                                    <i class="material-icons">close</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
