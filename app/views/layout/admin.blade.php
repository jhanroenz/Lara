
@include('layout.admin-nav')
<div class="row">
	<div class="container">
		<form action="{{ URL::route('search-results') }}" method="post">
	
	  			<div class="form-group input-group">
		    		<input type="text" class="form-control" placeholder="Student Name / Student Number / Search by Course" name="keyword">
	    			<span class="input-group-btn">            	   
     		 		<button class="btn btn-info" type="submit" name="search"><i class="fa fa-search"></i></button></span>
    			</div>

			{{ Form::token() }}
		</form>



	</div>
</div>

