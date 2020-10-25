@extends('layouts.app', ['activePage' => 'category', 'titlePage' => __('Category')])
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Category List</h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-success">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Date Created</th>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                    <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{substr($category->description,0 ,50)}}...</td>
                    <td>{{$category->created_at}}</td>
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

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
