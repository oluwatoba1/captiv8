<form method="POST" action="/admin-categories" files="true">
  
  {{ csrf_field() }}

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
  </div>

  <div class="modal-body">                  

    <label for="name">Name</label>
    <input type="text" class="form-control round-form" name="name" id="name" placeholder="e.g Men" value="{{ old('name') }}" required>

    @if ($errors->has('name'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>

</form>
