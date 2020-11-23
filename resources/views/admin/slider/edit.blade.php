@extends('layouts.app')

@section('title', 'Slider Edit')

@push('css')
    


@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Slider</h4>
                @include('layouts.partial.msg')  
                </div>
                <div class="card-body">
                  	<form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                  	@csrf
                  	@method('PUT')
                    	<div class="row">
	                      	<div class="col-md-12">
		                        <div class="form-group">
		                          <label class="bmd-label-floating">Title</label>
		                          <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
		                        </div>
	                      	</div>
                      	</div>
     					<div class="row">
	                      	<div class="col-md-12">
		                        <div class="form-group">
		                          <label class="bmd-label-floating">Sub Title</label>
		                          <input type="text" class="form-control" name="sub_title" value="{{ $slider->sub_title }}">
		                        </div>
	                      	</div>
                      	</div>
                      	<div class="row">
                            <div class="col-md-12">
                                <label class="bmd-label-floating">Upload Image</label>
                                <input type="file" name="image" class="">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('slider.index') }}" class="btn btn-info  pull-right">Back</a>
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