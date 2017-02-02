@extends('layouts.app')


<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


@section('content')
<div class="container">

<div class="panel panel-info  text-center">
      <div class="panel-heading main">
	      <div class="import activeC " ><h3>Import Excel File</h3> </div>
	      <div class="export"> <h3>Export Table From Database</h3></div>
	  </div>
      <div class="panel-body">
      <div class="import-body">
      	
      		<form action="import/post" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{! csrf_token() !}">
				Choose a model to import :
				@foreach ($list as $l)
		
					<div class="checkbox" >
					  <label><input required="required" type="radio" name="model" value="{{$l}}"> {{$l}}</label>
					</div>
			
      			@endforeach

				<div class="form-group">
					<input required="required" type="file" name="file" class="filestyle" data-buttonName="btn-primary">
				</div>
				<button class="btn btn-lg btn-success" type="submit">Convert</button>
			</form>

			@if(isset($text))
    			{{ $text }}
			@endif

      </div>

      <div class="export-body">
      	
	
		<div class="list-group">
		Choose a model to export :
		<form action="export" method="post">
			@foreach ($list as $l)
	
					<div class="checkbox">
					  <label><input type="radio" required="required" name="model" value="{{$l}}"> {{$l}}</label>
					</div>
				
      		@endforeach
      		<button class="btn btn-success btn-lg">Export</button>
      	</form>
      	@if(isset($text))
    			{{ $text }}
			@endif
		</div>
      </div>
      

      </div>
    </div>

			
</div>

<script>

</script>

<style>

	.export-body{
		display: none;
	}

	.panel-heading{
		padding: 0
	}
	.panel-body{
		padding-top: 40px
	}
	.main{
		overflow: hidden;
	}
	
	.import,.export{
		width: 50%;
		float: left;
		padding-bottom: 5px;
		cursor: pointer;
		transition: background-color .5s ease-in-out;
	}

	.activeC{background-color: #aedcf3}

	.import:hover,.export:hover{
		background-color: #aedcf3
	}

</style>
@endsection
