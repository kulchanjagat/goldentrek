<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@include('backend.includes.header')
@yield('styles')
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
<!-- fixed-top-->
@include('backend.includes.top-nav')
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        @include('backend.includes.sidebar-nav')
      <div class="content-body">

          @yield('content')

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  @include('backend.includes.footer')
  @include('backend.includes.scripts')
  @yield('scripts')
</body>
</html>