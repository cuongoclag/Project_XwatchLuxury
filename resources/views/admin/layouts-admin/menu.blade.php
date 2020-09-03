<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

    <div class="sidebar-brand-text mx-3">XW Admin <sup>luxury</sup></div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li> -->
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Danh Mục Sản Phẩm
  </div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_a" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý Loại Sản Phẩm</span>
    </a>
    <div id="myDIV_a" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Mục Loại Sản Phẩm:</h6>
        <a class="collapse-item" href="{{URL::to('admin/typeproduct/typeproduct-list')}}">Danh sách Loại Sản Phẩm.</a>
        <a class="collapse-item" href="{{URL::to('admin/typeproduct/typeproduct-add')}}">Thêm Mới Loại Sản Phẩm.</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_b" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý Sản Phẩm</span>
    </a>
    <div id="myDIV_b" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Mục Sản Phẩm:</h6>
        <a class="collapse-item" href="{{URL::to('admin/product/product-list')}}">Danh sách Sản Phẩm.</a>
        <a class="collapse-item" href="{{URL::to('admin/product/product-add')}}">Thêm Mới Sản Phẩm.</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <!-- Heading -->
  <!-- <div class="sidebar-heading">
    Danh Mục Sản Phẩm
  </div> -->
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_c" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý Đơn Hàng</span>
    </a>
    <div id="myDIV_c" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Mục Đơn Hàng:</h6>
        <a class="collapse-item" href="{{ URL::to('admin/order/management_order') }}">Danh sách Đơn Hàng.</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_d" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý Tin Mới</span>
    </a>
    <div id="myDIV_d" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Mục Tin Mới:</h6>
        <a class="collapse-item" href="{{URL::to('admin/tin_tuc/list-tin-tuc')}}">Danh Sách Tin Mới</a>
        <a class="collapse-item" href="{{URL::to('admin/tin_tuc/add-tin-tuc')}}">Thêm Tin Mới</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_e" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý bình luận</span>
    </a>
    <div id="myDIV_e" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Bình Luận:</h6>
        <a class="collapse-item" href="{{URL::to('admin/comment/cmt-list')}}">Danh sách bình luận</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_f" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý Tài Khoản</span>
    </a>
    <div id="myDIV_f" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Mục Tài Khoản</h6>
        <a class="collapse-item" href="{{URL::to('admin/user/user-list')}}">Danh Sách Tài Khoản</a>
        <a class="collapse-item" href="{{URL::to('admin/user/user-add')}}">Thêm Tài Khoản Mới</a>
      </div>
    </div>
  </li>
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_g" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý phản hồi</span>
    </a>
    <div id="myDIV_g" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh Mục Phản hồi</h6>
        <a class="collapse-item" href="{{URL::to('admin/feedback/feedback-list')}}">Danh Sách Phản Hồi</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myDIV_h" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Quản Lý Slider</span>
    </a>
    <div id="myDIV_h" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Danh mục Slider</h6>
        <a class="collapse-item" href="{{URL::to('admin/slider/slider-manage')}}">Danh mục Slider</a>
        <a class="collapse-item" href="{{URL::to('admin/slider/slider-add')}}">Thêm Mới Slider</a>
      </div>
    </div>
  </li>
</ul>