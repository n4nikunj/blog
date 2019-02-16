@extends('layout.main')
@section('content')
	<div class="content-wrapper ">
	 @foreach($blogList as $val)
		<div class="row">
			<div class="col-lg-3 col-3">
			<img src ="{{IMGPATH}}/user/{{$val->blogImgName}}" width="150px"/>
			</div>
			<div class="col-lg-9 col-9"><a href="{{URL}}/viewblog/{{ str_slug($val->blogTitle) }}/{{$val->id}}" >{{$val->blogTitle}}</a>
			</div>
			
		</div>
	@endforeach	
    </div>
@stop