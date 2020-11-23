@extends('layouts.app')

@section('title', 'Create Porfolio Item')

@push('css')
    


@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Portfolio Item</h4>
                  @include('layouts.partial.msg')
                </div>
                <div class="card-body">
                  	<form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Select Category</label>
                            <select class="form-control" name="category">
                              @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label class="bmd-label-floating">Upload Portfolio Image</label>
                              <input type="file" name="image" class="">
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
	                          <label class="bmd-label-floating">Sub Title</label>
	                          <input type="text" class="form-control" name="sub_title">
	                        </div>
                      	</div>
                    	</div>
                    	<div class="row">
                          <div class="col-md-12">
                              <label class="bmd-label-floating">Upload Image_Href</label>
                              <input type="file" name="image_href" class="">
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('item.index') }}" class="btn btn-info  pull-right">Back</a>
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