@extends('layouts.app')

@section('title', 'Edit Category')

@push('css')
   
   
@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Category</h4>
                  @include('layouts.partial.msg')
                </div>
                <div class="card-body">
                  	<form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                  	@csrf
                  	@method('PUT')
                    <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Name</label>
                              <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            </div>
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('category.index') }}" class="btn btn-info  pull-right">Back</a>
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