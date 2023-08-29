
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.header')
    @include('backend.includes.css')
  </head>

  <body>
       @include('backend.includes.asidebar')
        @include('backend.includes.topbar')

    <div class="br-mainpanel">
      @yield('body-content')
      
  <!-- FOOTER -->
       @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
      @include('backend.includes.scripts')
       
  </body>
</html>
