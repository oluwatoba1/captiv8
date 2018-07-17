<form method="POST" action="/products" enctype="multipart/form-data">
  
  {{ csrf_field() }}

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
  </div>

  <div class="modal-body{{ $errors->has('name') ? ' has-error' : '' }}">                  

    <label for="name">Name</label>
    <input type="text" class="form-control round-form" id="name" name="name" placeholder="e.g Samsung Galaxy J7 Prime" value="{{ old('name') }}">

    @if ($errors->has('name'))
    <span class="help-block">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif

  </div>

  <div class="modal-body{{ $errors->has('description') ? ' has-error' : '' }}">                  

    <label for="description">Description</label>
    <textarea type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" rows="5"></textarea>

    @if ($errors->has('description'))
    <span class="help-block">
      <strong>{{ $errors->first('description') }}</strong>
    </span>
    @endif

  </div>

  <div class="modal-body{{ $errors->has('size') ? ' has-error' : '' }}">                  

    <label for="size">Size</label>
    <select class="form-control round-form" id="size" name="size">
      
      <option value="">Choose Size</option>
      <option value="small">Small</option>
      <option value="medium">Medium</option>
      <option value="large">Large</option>

    </select>

    @if ($errors->has('size'))
    <span class="help-block">
      <strong>{{ $errors->first('size') }}</strong>
    </span>
    @endif

  </div>

  <div class="modal-body{{ $errors->has('price') ? ' has-error' : '' }}">                  

    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">

    @if ($errors->has('price'))
    <span class="help-block">
      <strong>{{ $errors->first('price') }}</strong>
    </span>
    @endif

  </div>

  <div class="modal-body{{ $errors->has('category_id') ? ' has-error' : '' }}">                  

    <label for="category_id">Category</label>
    <select class="form-control round-form" id="category_id" name="category_id">
      
      <option value="">Choose Category</option>

      @foreach($categories as $category)

        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>

          {{ $category->name }}

        </option>

      @endforeach
    </select>

    @if ($errors->has('category_id'))
    <span class="help-block">
      <strong>{{ $errors->first('category_id') }}</strong>
    </span>
    @endif

  </div>

  <div class="modal-body{{ $errors->has('image') ? ' has-error' : '' }}">                  

    <label for="image">Upload Image</label>
    <input type="file" class="form-control round-form" id="image" name="image">

    @if ($errors->has('image'))
    <span class="help-block">
      <strong>{{ $errors->first('image') }}</strong>
    </span>
    @endif

  </div>

  <div class="modal-footer">
    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>

</form>


