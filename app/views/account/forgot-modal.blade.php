<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Account Recovery</h4>
      </div>
      <div class="modal-body">

		<form action="{{ URL::route('account-forgot-password-post') }}" method="post">
			<div class="field row">
				<div class="col-xs-8">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input class="form-control" type="text" name="email" placeholder="E-mail" {{ e(Input::old('email')) ? ' value ="' . Input::old('email') . '"' : '' }}>
						@if($errors->has('email'))
							{{ $errors->first('email') }}
						@endif
					</div>
				</div>
			</div>
			


      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		<input class="btn btn-success" type="submit" value="Recover" >
		{{ Form::token() }}

		</form>
 
    </div>
  </div>
</div>