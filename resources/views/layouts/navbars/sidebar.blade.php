<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/category" class="simple-text logo-normal">
      {{ __('ZNMC Electronics') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('category') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Category') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'brand' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('brand') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Brands') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Products') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
