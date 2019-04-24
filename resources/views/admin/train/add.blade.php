@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.train.index')}}">Quản lý chuyến tàu</a> <a href="" class="current">Thêm chuyến tàu</a> </div>
    <h1>Quản lý chuyến tàu</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span18">
      	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Thêm chuyến tàu</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.train.add')}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tiêu đề:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ old('title') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords:</label>
	                <div class="controls">
	                  <input type="text" name="keywords" id="required" value="{{ old('keywords') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá:</label>
	                <div class="controls">
	                  <input type="number" name="recost" id="required" value="{{ old('recost') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Điểm đi:</label>
	                <div class="controls">
	                  <input type="text" name="train_from" id="required" value="{{ old('train_from') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" style="width: 70%;height: 80px" >{{ old('description') }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5"></textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh(1200px:700px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" />
	                </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="Thêm" class="btn btn-success">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
        </div>
      </div>
    </div>
</div>
</div>
@stop