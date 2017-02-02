@extends('layouts.app')


<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@section('content')
<div class="container">


    <h1 style="margin-bottom: 35px"><center>Dashboard</center></h1>
    <div class="row">
        <div class="col-md-4 menu">
            <div class="list-group">
              <a href="#" class="list-group-item active">Menu   </a>
              <a href="home" class="list-group-item"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
              <a href="categ" class="list-group-item"> <i class="fa fa-list" aria-hidden="true"></i> Categories</a>
              <a href="#" class="list-group-item"> <i class="fa fa-tags" aria-hidden="true"></i>  Items</a>
              <a href="/members" class="list-group-item"> <i class="fa fa-users" aria-hidden="true"></i> Members</a>
              <a href="#" class="list-group-item"> <i class="fa fa-comments" aria-hidden="true"></i> Comments</a>
            </div>
        </div>

        <div class="col-md-8 dashboard" >
            <div class="panel panel-primary">

                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                
                <div ng-view></div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
