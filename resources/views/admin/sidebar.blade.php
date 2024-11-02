<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">

      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="/images/logo.png" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5"></h1>
          <p></p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{ url('/home') }}"> <i class="icon-home"></i>Home </a></li>
              
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Hotel Rooms</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{ url('create_room') }}">Add Rooms</a></li>
                  <li><a href="{{ url('view_room') }}">View Rooms</a></li>
                </ul>
              </li>

              <li><a href="{{ url('bookings') }}"> <i class="icon-home"></i>Bookings</a></li>

              <li><a href="{{ url('view_gallery') }}"> <i class="icon-windows"></i>Gallery</a></li>

              <li><a href="{{ url('view_blog') }}"> <i class="icon-home"></i>Blog</a></li>

              <li><a href="{{ url('all_messages') }}"> <i class="icon-windows"></i>Messages</a></li>

              <li><a href="{{ url('subscribers') }}"> <i class="icon-home"></i>Subscribers</a></li>
              
      </ul>
     
    </nav>
    <!-- Sidebar Navigation end-->