@extends('layout.list')
@section('content')
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User</h4>
                  
                  <form class="forms-sample" method="post" action="{{BACKENDURL}}user/submit">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="input1">Name</label>
                      <input type="text" class="form-control" id="input1" placeholder="Name" name="name">
                    </div>
					<div class="form-group">
                      <label for="input2">Email</label>
                      <input type="email" class="form-control" id="input2" placeholder="Email" name="email">
                    </div>
					<div class="form-group">
                      <label for="input3">Password</label>
                      <input type="password" class="form-control" id="input3" placeholder="password" name="pass">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>
        
@stop
