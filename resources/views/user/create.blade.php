<form method="POST" action="/register">

  @csrf

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Add New User</h4>
  </div>

  <div class="modal-body{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name">Name</label>

      <input id="name" type="text" class="form-control round-form" name="name" value="{{ old('name') }}" required autofocus>

      @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif

  </div>

  <div class="modal-body{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">Email Address</label>

      <input id="email" type="text" class="form-control round-form" name="email" value="{{ old('email') }}" required autofocus>

      @if ($errors->has('email'))
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif

  </div>

<div class="modal-body{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password">Password</label>

      <input id="password" type="password" class="form-control round-form" name="password" value="{{ old('password') }}" required autofocus>

      @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif

  </div>

<div class="modal-body">
    <label for="password-confirm">Confirm Password</label>

      <input id="password-confirm" type="password" class="form-control round-form" name="password_confirmation" required>

  </div>

  <div class="modal-footer">
    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>

