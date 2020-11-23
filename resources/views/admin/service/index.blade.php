@extends('layouts.app')

@section('title', 'Service Table')

@push('css')
    
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')

	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h2 class="card-title ">Service Table
                    <a href="{{ route('service.create') }}" class="btn btn-info float-right">Add New</a>
                  </h2>
                @include('layouts.partial.msg')
                </div>
                <div class="clearfix"></div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table1" class="table table-striped table-bordered">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Service Logo</th>
                        <th>Service Title</th>
                        <th style="width: 300px;">Service Details</th>
                        <th>Created AT</th>
                        <th>Updated At</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        @foreach($services as $key => $service)
                        <tr>
                          	<td>{{ $key + 1 }}</td>
                          	<td>
                              <i class="{{ $service->logo }}"></i> 
                            </td>
                          	<td>{{ $service->title }}</td>
                           	<td>{{ $service->details }}</td>
                            <td>{{ $service->created_at }}</td>
                            <td>{{ $service->updated_at }}</td>
                            <td>
                            	{{-- edit --}}
                            	<a href="{{ route('service.edit', $service->id) }}" class="btn btn-info btn-sm"><i class="material-icons">edit</i></a>
                            	{{-- delete --}}
	                             <form id="delete-form-{{ $service->id }}" action="{{ route('service.destroy', $service->id) }}" method="POST" style="display: none;">
	                                @csrf
	                                @method('DELETE')
	                              </form>
	                              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure ? You want to delete this ?')) {
	                                event.preventDefault();
	                                document.getElementById('delete-form-{{ $service->id }}').submit();
	                              }else{
	                                event.preventDefault();
	                              }"><i class="material-icons">delete</i></button>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection

@push('script')

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
      $('#table1').DataTable();
  } );
</script>

@endpush