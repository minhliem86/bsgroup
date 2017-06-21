<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
  <ul class="list-group panel">
    <li class="list-group-item"><b>SIDE PANEL</b></li>
    <li class="list-group-item {{LP_lib::setActive(2,'dashboard')}}"><a href="index.html"><i class="fa  fa-dashboard"></i>Dashboard </a></li>
    <li class="list-group-item {{LP_lib::setActive(2,'homepage')}}"><a href="{{route('admin.home.index')}}"><i class="glyphicon glyphicon-home"></i>Home </a></li>
    <li class="list-group-item {{LP_lib::setActive(2,'project')}}"><a href="{{route('admin.project.index')}}"><i class="fa fa-cubes"></i>Project </a></li>
    <li class="list-group-item {{LP_lib::setActive(2,'client')}}"><a href="{{route('admin.client.index')}}"><i class="fa  fa-bullhorn"></i>Client </a></li>

  </ul>
</div>
