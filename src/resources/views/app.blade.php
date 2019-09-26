<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
  </div>  
</nav>

<div class="container" style="margin-top:30px" id="artisan-ui">
	  <div class="row">
	    	<example-component></example-component>
	    <div class="col-md-4">
	    	<div class="card mb-3">
			  <div class="card-header">Header</div>
			  <div class="card-body">Content</div>
			</div>
	    </div>

	    <div class="col-md-4">
	    	<div class="card mb-3">
			  <div class="card-header">Header</div>
			  <div class="card-body">Content</div>
			</div>
	    </div>
	 </div>

	 <div class="row">
	    <div class="col-md-4">
	    	<div class="card mb-3">
			  <div class="card-header">Header</div>
			  <div class="card-body">Content</div>
			</div>
	    </div>

	    <div class="col-md-4">
	    	<div class="card mb-3">
			  <div class="card-header">Header</div>
			  <div class="card-body bg-dark">Content</div>
			</div>
	    </div>

	    <div class="col-md-4">
	    	<div class="card mb-3">
			  <div class="card-header">Header</div>
			  <div class="card-body">Content</div>
			</div>
	    </div>
	 </div>
</div>
</body>
<script src="{{ asset('vendor/artisan-ui/js/app.js') }}"></script>
</html>

