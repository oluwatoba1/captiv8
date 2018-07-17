@extends('admin.master')

@section('content')
  <!-- **********************************************************************************************************************************************************
  MAIN CONTENT
  *********************************************************************************************************************************************************** -->
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
      <div class="row adjust">
          <a class="btn btn-default btn-round" data-toggle="modal" data-target="#myModal">
            New Product
          </a>
      </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                @include('product.create')

              </div>
            </div>
          </div>

      <div class="row mt"></div>
      <div class="col-lg-12">
                  <div class="content-panel">
                  <h4><i class="fa fa-angle-right"></i> Product</h4>
                      <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                          <thead>
                          <tr>
                              <th class="numeric">S/N</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Price</th>
                              <th>Size</th>
                              <th>Category</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>

                            @foreach($products as $product)

                                <tr>

                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->size }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>
                                  <a href="users/{{ $product->id }}/edit" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                  <a href="#" class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash-o "></i></a>
                                </td>

                                </tr>

                                @endforeach

                          </tbody>
                      </table>
                      </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->   
          </div>

      </section>
  </section>

@endsection