@extends('layouts.admin')

@section('content')
<div class="content-header row">
</div>
<div class="content-body">
    <div class="row">
        <div class="col-md-12 text-center m-auto">
            <img src="{{ asset('app-assets/images/pages/no-results.png') }}" class="img-fluid" alt="No results">
            <h2 class="font-weight-bold mt-1">No Requests Found!</h2>
            <a href="{{ route('admin.configuration') }}" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Post Request</a>
        </div>
    </div>
</div>
@endsection
