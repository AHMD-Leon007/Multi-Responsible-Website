<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Multi - Dashboard
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/slider*') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{ route('slider.index') }}">
            <i class="material-icons">view_carousel</i>
            <p>Slider</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/feature*') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{ route('feature.index') }}">
            <i class="material-icons">list</i>
            <p>Awesome Feature</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/service*') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{ route('service.index') }}">
            <i class="material-icons">works</i>
            <p>Our Services</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{ route('category.index') }}">
            <i class="material-icons">category</i>
            <p>Category</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/item*') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{ route('item.index') }}">
            <i class="material-icons">create</i>
            <p>Portfolio Item</p>
          </a>
        </li>
      </ul>
    </div>
  </div>