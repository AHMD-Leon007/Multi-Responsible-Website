@extends('layouts.app')

@section('title', 'Create New Feature')

@push('css')
   

@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Feature</h4>
                  @include('layouts.partial.msg')
                </div>
                <div class="card-body">
                  	<form action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Font Awesome Logo</label>
                              <input type="text" class="form-control" name="logo">
                            </div>
                          </div>
                      </div>
                    	<div class="row">
	                      	<div class="col-md-12">
		                        <div class="form-group">
		                          <label class="bmd-label-floating">Title</label>
		                          <input type="text" class="form-control" name="title">
		                        </div>
	                      	</div>
                    	</div>
   					          <div class="row">
	                      	<div class="col-md-12">
		                        <div class="form-group">
		                          <label class="bmd-label-floating">Details</label>
		                          <input type="text" class="form-control" name="details">
		                        </div>
	                      	</div>
                    	</div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('feature.index') }}" class="btn btn-info  pull-right">Back</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection

@push('script')


@endpush