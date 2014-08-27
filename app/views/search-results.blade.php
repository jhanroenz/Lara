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
								{{ $result->firstname,' ', $result->middlename,' ', $result->lastname }}

							</td>
							<td>
								{{ $result->course }}
							</td>
							<td>
								{{ $result->year }}
							</td>
							<td>
								<form action="{{ URL::route('student-info') }}" method="post">
								<button class="btn btn-info" name="stud_no" value="{{$result->student_number}}" >View Details</button>
								</form>
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