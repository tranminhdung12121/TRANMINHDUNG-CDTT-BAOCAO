<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/user/'.Auth::guard('admin')->user()->image ) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('dashboard.index') }}" class="d-block">{{ Auth::guard('admin')->user()->name   }}</a>
        </div>
      </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button> 
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fab fa-uncharted"></i>
                  <p>
                      Sản phẩm
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('product.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tất cả sản phẩm</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('category.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Danh mục sản phẩm</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('brand.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Thương hiệu</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                      Bài viết
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('post.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tất cả bài viết</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('topic.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Chủ đề bài viết</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('page.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Trang đơn</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon far fa-id-card"></i>
                  <p>
                      Quản lý liên hệ
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('customer.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Khách hàng</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('order.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Đơn hàng</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('contact.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Liên hệ</p>
                      </a>
                  </li>

              </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tv"></i>
                  <p>
                      Giao diện
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('menu.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menu</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('slider.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Slider</p>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                      Hệ thống
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('user.index')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Thành viên</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('user.create')  }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Thêm thành viên</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('config.index')  }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cấu hình</p>
                    </a>
                </li>
              </ul>
          </li>

          <li class="nav-header">CHỨC NĂNG</li>
          <li class="nav-item">
              <a href="{{ route('admin.logout') }}" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Đăng xuất</p>
              </a>
          </li>
      </ul>
  </nav>
    <!-- /.sidebar-menu -->
  </div>