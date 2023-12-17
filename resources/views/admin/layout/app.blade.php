<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>--</title>

    <!-- global  -->
    <link rel="stylesheet" href="{{asset('css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery.toast.min.css')}}">
  </head>

  <body dir="{{app()->getLocale() == 'ar'?'rtl':'ltr'}}" >
    <div class="layoutS2">
      <nav>
        <div class="logo"></div>
        <ul class="nav-list">
          <li>
            <a href="{{route('admin.info')}}" ><img src="{{asset('assets/icons/user.svg')}}" alt="{{route('admin.info')}}" /> </a>
          </li>

          {{-- <li>
            <a href="{{route('invitationSetting')}}">
              <img src="{{asset('assets/icons/settings.svg')}}" alt="">
            </a>
          </li> --}}
        </ul>
      </nav>
      <main >
        @yield('content')
    
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{asset('js/jquery.toast.min.js')}}"></script>
    <script>
      @if (\Session::has('successfully'))
      $.toast({
        heading: 'Success',
        text: 'operation done successfully',
        showHideTransition: 'slide',
        icon: 'success'
      })
      @endif
    </script>
    @stack('scripts')
  </body>
</html>
