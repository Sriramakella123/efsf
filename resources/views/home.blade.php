@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
				    <div class="col-md-12 col-md-offset-2.5">
				    <img src= "http://c25349309.preview.getnetset.com/files/200px.png" class ="img-thumbnail" align="right" width ="35%" height ="46%" alt="Responsive image"/>
                    <h5>You are logged in!</h5><h6><a href="{{ url('/customers') }}">Click here to continue</a></h6>
					<style>
                           body {
                                  font-family: 'Lato';
			                      background-color: aqua;
                                 }
					</style>
					<div>
					<h5><i>Our Services include </i></h5>
					<h6><b> # Bank on Yourself </b></h6>
					<h6><b> # Financial Planning </b></h6>
					<h6><b> # College Planning </b></h6>
					<h6><b> # Business Solutions </b></h6>
					<h6><b> # Investment Management </b></h6>
					<h6><b> # Charitable Giving </b></h6>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
