@extends('layout.main')
@section('content')
	<div class="content-wrapper ">
	<div class="row">
			<div class="col-lg-12 col-12">
			<img src ="{{IMGPATH}}/user/{{$blogDetail[0]->blogImgName}}" height="300px" width="100%"/>
			</div>
			
			
		</div>
		
		<div class="row">
				
			<div class="col-lg-12 col-12">{{$blogDetail[0]->blogTitle}}</div>
		</div>
		<div class="row ">
			<p class="card-description">
                   Post Date
                    <code>{{$blogDetail[0]->blogPostDate}}</code> |  Post By
                    <code> {!! Helper::getName($blogDetail[0]->blogPostBy) !!}</code>
                  </p>
		</div>
		<div class="row">
				
			<div class="col-lg-12 col-12">{{$blogDetail[0]->blogDecription}}</div>
		</div>
    </div>
@stop