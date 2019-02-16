@extends('layout.list')
@section('content')
    <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User List</h4>
                  <h4 class="card-title"><a href ="">Add New User</a></h4>
                  
                  <div class="table-responsive">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
							Name
                          </th>
                          <th>
                            Email
                          </th>
						  <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
					@if(!empty($userList))
						@php $i = 1; @endphp
						@foreach($userList as $val)
								<tr>
								  <td>
								  {{$i}}
								  </td>
								  <td>
								  {{$val->name}}
								  </td>
								  <td>
									{{$val->email}}
								  </td>
								  <td>
									{{$val->name}}
								  </td>
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
