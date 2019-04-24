@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Quản lý giỏ hàng</a> </div>
    <h1>Quản lý giỏ hàng</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý cart</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Họ và tên</th>
                  <th>SDT</th>
                  <th>Email</th>
                  <th>Số vé</th>
                  <th>Ngày</th>
                  <th>Giờ</th>
                  <th>Chiều đi</th>
                  <th>Tình trạng</th>
                  <th style="text-align:center;width:150px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($carts as $cart)
                <tr class="even gradeA">
                  <td>{{$cart->id}}</td>
                  <td>{{$cart->fullname}}</td>
                  <td>{{$cart->phone}}</td>
                  <td>{{$cart->email}}</td>
                  <td>{{count($cart->cost)}}</td>
                  <td>{{ $cart->date }}</td>
                  <td>
                    @foreach($cart->cost as $train)
                      {{ $train->time }}
                    @endforeach
                  </td>
                  @if($cart->active == 0)
                  <td><a class="btn btn-primary">Gửi</a></td>
                  @else
                  <td>Đã thanh toán</td>
                  @endif
                  <td class="text-center">
                  	<a onclick="return confirm('Do you want to delete this cart?')" href="{{route('admin.cart.delete', $cart->id)}}" class="btn btn-danger">Xóa</a>
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
@stop