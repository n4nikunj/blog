@extends('layout.list')
@section('content')
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blog</h4>
                  
                  <form class="forms-sample" method="post" enctype= "multipart/form-data" action="{{BACKENDURL}}blog/update">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <input type="hidden" name="id" value="{{$blogdata[0]->id}}">
                    <div class="form-group">
                      <label for="input1">Blog Name</label>
                      <input type="text" class="form-control" value="{{$blogdata[0]->blogName}}" id="input1" placeholder="Blog Name" name="blogname">
                    </div>
					<div class="form-group">
                      <label for="input2">Blog Title</label>
                      <input type="text" class="form-control" value="{{$blogdata[0]->blogTitle}}" id="input2" placeholder="Blog Title" name="title">
                    </div>
					<div class="form-group">
                      <label for="input3">Blog Post date</label>
                      <input type="text" class="form-control" value="{{$blogdata[0]->blogPostDate}}" id="input3" placeholder="Date (YYYY-MM-DD)" name="date">
                    </div>
					<div class="form-group">
                      <label for="input4">Description</label>
                       <textarea class="form-control" name="desc"  id="input4" rows="2">{{$blogdata[0]->blogDecription}}</textarea>
                    </div>
					
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>
@stop
