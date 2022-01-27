@php 
 $sid=session('sid');
@endphp 
@if(empty($sid))
  <script>
      location.href="{{url('/adminpanel')}}";
  </script>
@endif 
<!DOCTYPE html>
<html>
    <head>
    @include('admin.includes.head')
    </head>
    <body>
        <main>
            <header>
            @include('admin.includes.nav')
            </header>
            <section>
            @yield('content')
            
        
        </section>
               
                
    </main>
    @include('admin.includes.foot')
    </body>
</html>