@extends('layouts.app')

@section('title', 'Item Edit')

@push('css')
    


@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Portfolio Item</h4>
                @include('layouts.partial.msg')  
                </div>
                <div class="card-body">
                  	<form action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                  	@csrf
                  	@method('PUT')
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
                              <input type="file" name="image" class="" value="{{ asset('uploads/item/'.$item->image) }}">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $item->title }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" value="{{ $item->sub_title }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label class="bmd-label-floating">Upload Image_Href</label>
                              <input type="file" name="image_href" class="" value="{{ asset('uploads/item/href/'.$item->image_href) }}">
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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