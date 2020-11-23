@extends('layouts.app')

@section('title', 'Create New Category')

@push('css')
   

@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Category</h4>
                  @include('layouts.partial.msg')
                </div>
                <div class="card-body">
                  	<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                  	@csrf
                    <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Name</label>
                              <input type="text" class="form-control" name="name">
                            </div>
                          </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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