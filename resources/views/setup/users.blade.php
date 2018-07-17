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
                New User
              </a>
          </div>
              
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

                    @include('user.create')

                  </div>
                </div>
              </div>

          <div class="row mt"></div>
          <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Users</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="numeric">S/N</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>

                                @foreach($users as $user)

                                <tr>

                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                  <a href="users/{{ $user->id }}/edit" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
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