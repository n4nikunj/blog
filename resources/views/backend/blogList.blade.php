@extends('layout.list')
@section('content')
    <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blog List</h4>
                  <h4 class="card-title"><a href ="{{BACKENDURL}}blog/add">Add New Blog</a></h4>
                  
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th> Blog Name </th>
                          <th> Title </th>
						  <th> Post Date </th>
						  <th> Image </th>
						  <th> Post By </th>
						  <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
					@if(!empty($blogList))
						@php $i = 1; @endphp
						@foreach($blogList as $val)
								<tr>
								  <td>
								  {{$i}}
								  </td>
								  <td>
								  {{$val->blogName}}
								  </td>
								  <td>
									{{$val->blogTitle}}
								  </td>
								  <td>
									{{$val->blogPostDate}}
								  </td>
								  <td>
									{{$val->blogImgName}}
								  </td>
								  <td>
									{{$val->blogPostBy}}
								  </td>
								  <td><a href="{{BACKENDURL}}blog/edit/{{$val->id}}"><i class="fa fa-edit" style="color:#fff"></i></a> | <a href="{{BACKENDURL}}blog/delete/{{$val->id}}"><i class="fa fa-trash-o" style="color:#fff"></i></a></td>
								</tr>
						@php $i++; @endphp		
						@endforeach
					@endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
        <!-- content-wrapper ends -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@stop
