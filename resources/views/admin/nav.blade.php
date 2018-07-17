<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">{{Auth::user()->name}}</h5>
                    
                  <li class="mt">
                      <a class="active" href="dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Setup</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="/products">Product</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->