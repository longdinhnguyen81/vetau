@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Quản lý chuyến tàu</a> </div>
    <h1>Quản lý chuyến tàu</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        	<a href="{{route('admin.train.add')}}" class="btn btn-success">Thêm</a>
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý dịch vụ</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Mô tả</th>
                  <th>Giá</th>
                  <th>Chiều đi</th>
                  <th style="width: 20%">Giờ chạy</th>
                  <th>Hình ảnh</th>
                  <th style="text-align:center;width:150px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($trains as $train)
                <tr class="even gradeA">
                  <td>{{$train->id}}</td>
                  <td>{{$train->title}}</td>
                  <td>{{$train->description}}</td>
                  <td>{{$train->recost}}</td>
                  <td>{{$train->train_from}}</td>
                  <td>
                    <ul>
                      <li>
                        <table style="width: 100%; border: hidden">
                      @foreach($train->cost as $cost)
                          <tr>
                            <th>{{ $cost->time }} </th>

                            <th>
                              <a href="{{ route('admin.cost.edit', ['id' => $train->id, 'cid' => $cost->id]) }}" class="btn btn-primary">Sửa</a>
                              <a href="{{ route('admin.cost.delete', ['id' => $train->id, 'cid' => $cost->id]) }}" class="btn btn-danger">Xóa</a>
                            </th>
                          </tr>
                      @endforeach
                        </table>
                      </li>
                      <li><a href="{{ route('admin.cost.add', $train->id) }}">Thêm</a></li>
                    </ul>
                  </td>
                  <td><img style="width:300px" src="/upload/{{$train->picture}}" /></td>
                  <td class="text-center">
                  	<a href="{{route('admin.train.edit', $train->id)}}" class="btn btn-primary">Sửa</a>
                  	<a onclick="return confirm('Do you want to delete this train?')" href="{{route('admin.train.delete', $train->id)}}" class="btn btn-danger">Xóa</a>
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
