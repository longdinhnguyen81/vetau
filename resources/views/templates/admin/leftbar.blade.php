
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin.index.index')}}"><i class="icon icon-home"></i> <span>Trang chủ</span></a> </li>
    <li class="{{ request()->is('admin/train*') ? 'active' : '' }}"> <a href="{{route('admin.train.index')}}"><i class="icon icon-signal"></i> <span>Quản lý chuyến tàu</span></a> </li>
    <li class="{{ request()->is('admin/post*') ? 'active' : '' }}"> <a href="{{route('admin.post.index')}}"><i class="icon icon-inbox"></i> <span>Quản lý tin tức</span></a> </li>
    <li class="{{ request()->is('admin/email*') ? 'active' : '' }}"><a href="{{ route('admin.email.index') }}"><i class="icon icon-th"></i> <span>Quản lý email</span></a></li>
    <li class="{{ request()->is('admin/cart*') ? 'active' : '' }}"><a href="{{ route('admin.cart.index') }}"><i class="icon icon-th"></i> <span>Quản lý đặt vé</span></a></li>
    <li class="{{ request()->is('admin/users*') ? 'active' : '' }}"><a href="{{ route('admin.users.index') }}"><i class="icon icon-user"></i> <span>Quản lý admin</span></a></li>
    <li class="{{ request()->is('admin/contact*') ? 'active' : '' }}"><a href="{{ route('admin.contact.index') }}"><i class="icon icon-fullscreen"></i> <span>Quản lý liên hệ</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->