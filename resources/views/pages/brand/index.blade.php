@extends('layouts.app', ['activePage' => 'brand', 'titlePage' => __('Brands')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Brand List</h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-success">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Date Created</th>
                </thead>
                <tbody>
                  @foreach($brands as $brand)
                  <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->category}}</td>
                    <td>{{$brand->created_at}}</td>
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
