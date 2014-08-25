<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign in</h4>
      </div>
      <div class="modal-body">
        <form action="{{ URL::route('account-sign-in-post')}}" method="post">
          <div class="field">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email" {{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }} required>
                @if($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
              </div>
          </div>
          <div class="field">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
            </div>
          </div>

          <div class="field">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">
              <h5> Remember me </h5>
            </label>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" value="Signin" class="btn btn-primary">Sign In</button>
      </div>
      {{ Form::token()}}
      </form>
    </div>
  </div>
</div>