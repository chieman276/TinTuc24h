  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{ asset('img/logo1.png')}}" style="width: 200px; height: 50px" class="logo-icon" alt="logo icon">
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">

      <li>
        <a href="{{route('dashboard.index')}}">
          <i class="fa fa-home"></i> <span>Trang Chủ</span>
        </a>
      </li>
      <li>
        <a href="{{ route('categories.index')}}">
          <i class="fa fa-file-text-o"></i> <span>Loại Tin Tức</span>
        </a>
      </li>
      <li>
        <a href="{{ route('news.index')}}">
          <i class="fa fa-newspaper-o"></i>
          <span class=""></span>
          <span>Tin Tức</span>
        </a>
      </li>
      <li>
        <a href="{{ route('userGroups.index')}}">
          <i class="fa fa-id-badge"></i> <span>Nhóm Nhân Viên</span>
        </a>
      </li>
      <li>
        <a href="{{ route('users.index')}}">
          <i class="fa fa-user"></i> <span>Nhân Viên</span>
        </a>
      </li>
      <li>
        <a href="{{ route('comments.index')}}">
          <i class="fa fa-comments"></i> <span>Bình Luận</span>
        </a>
      </li>


      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>

   </div>
   <!--End sidebar-wrapper-->

