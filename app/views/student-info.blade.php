@extends('layout.main')

@section('content')
@include('layout.admin')
			@if($reports->count())
			

			
			<div class="row">
				<div class="container">
				@foreach($students as $student)
				<h3>{{$student->firstname , ' ', $student->middlename,' ', $student->lastname}}
				<small>{{$student->course}}</small>
				</h3>

				@endforeach
				<table class="table table-bordered">
					<thead>
						<td><strong>Debit</strong></td>
						<td><strong>Credit</strong></td>
					</thead>
					@foreach($reports as $report)
						
						<tr>
							<td>{{ $report->debit }}</td>
							<td>{{ $report->credit }}</td>
						</tr>
					@endforeach
						<tr> </tr>
						<tr> </tr>
						<tr>
							<td><strong>Total Balance</strong></td>
							@foreach($students as $student)
							<td>{{ $student->total_balance }}</td>
							@endforeach
						</tr>
				</table>			
				</div>
			</div>
			@else
			<div class="row">
				<div class="container">
				<table class="table table-bordered table-stripped">
					<thead>
						<td><strong>Debit</strong></td>
						<td><strong>Credit</strong></td>
					</thead>
					@foreach($reports as $report)
						<tr>
							<td>{{ $report->debit }}</td>
							<td>{{ $report->credit }}</td>
						</tr>
					@endforeach
						<tr> </tr>
						<tr> </tr>
						<tr>
							<td><strong>Total Balance</strong></td>
							@foreach($students as $student)
							<td>{{ $student->total_balance }}</td>
							@endforeach
						</tr>
				</table>	

			@endif
			<div class="row">
				<div class="container">
					@foreach($reports as $transaction)
						Last transaction: {{ $transaction->created_at}} <br>
						Paid: {{ $transaction->debit }} <br>
						Remaining balance: {{ $transaction->credit }} <br>
						Served by: {{ Auth::user()->firstname }} <br><br>
					@endforeach
				</div>
			</div>
@stop