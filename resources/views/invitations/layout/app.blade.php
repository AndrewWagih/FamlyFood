<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invitations</title>

    <!-- global  -->
    <link rel="stylesheet" href="{{asset('css/global.css')}}" />
    
  </head>

  <body>
    <div class="layoutS2">
      <nav>
        <div class="logo"></div>
        <ul class="nav-list">
          <li>
            <a href=""><img src="{{asset('assets/icons/user.svg')}}" alt="" /> </a>
          </li>

          <li>
            <a href="{{route('invitationSetting')}}">
              <img src="{{asset('assets/icons/settings.svg')}}" alt="">
            </a>
          </li>
        </ul>
      </nav>
      <main>
        @yield('content')
    
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @stack('scripts')
  </body>
</html>
