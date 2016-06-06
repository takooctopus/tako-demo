@extends('admin.layouts.layout')

@section('content')
<div class="container-fluid">
	<div class="row page-title-row">
		<div class="col-md-6">
            <h3>Articles <small>» Listing</small></h3>
        </div>
        <div class="col-md-6 text-right">
            <a href="/admin/article/create" class="btn btn-success btn-md">
                <i class="fa fa-plus-circle"></i> New Article
            </a>
        </div>
	</div>
	
	<div class="row">
        <div class="col-sm-12">
            @include('admin.partials.errors')
            @include('admin.partials.success')
        </div>
    </div>	
</div>
@endsection