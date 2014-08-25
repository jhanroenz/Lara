@extends('layout.main')

@section('content')
@include('layout.admin')
	<div class="row">
		<div class="container">
			<table class="table table-bordered">
			
			@if($results->count())
				<thead>
          			<td><strong>Name</strong></td>
          			<td><strong>Course</strong></td>
          			<td><strong>Year</strong></td>
          			<td></td>
          		</thead>
			
					@foreach($results as $result)
						<tr>
							<td>
								{{ $result->firstname }}
							</td>
							<td>
								{{ $result->course }}
							</td>
							<td>
								{{ $result->year }}
							</td>
							<td>
								<button class="btn btn-info"><i class="fa fa-gear"></i></button>
							</td>
						</tr>
					@endforeach
			</table>
			@else
	            <div class="alert alert-info" role="alert">
				  <p><strong>Sorry,  </strong>   No Results found.</p>
				</div>
            @endif
		</div>
	</div>

@stop