<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invitation</title>

    <!-- global  -->
    <link rel="stylesheet" href="{{asset('css/global.css')}}" />
    <style>
      body{
        background: linear-gradient(90deg, #FFA389 0%, #F0A58F 2%, #CEAB9F 8%, #B3B0AB 13%, #A0B3B4 19%, #94B5BA 25%, #91B6BC 31%, #4F7989 63%, #406574 70%, #2E4B5B 82%, #233C4B 92%, #203746 100%);

      }
    </style>
  </head>

  <body>
    <div class="layout" >
      <div class="head" style="position: relative">
        <svg width="100%" viewBox="0 0 2003 258" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2026 129.076H-3" stroke="#4F7989" stroke-width="0.5" stroke-miterlimit="10"/>
          <path d="M1798.83 0.231445C1798.83 70.9332 1741.79 128.414 1670.87 129.076C1741.79 129.522 1798.83 187.003 1798.83 257.921C1798.83 187.003 1856.08 129.509 1926.79 129.076C1856.1 128.414 1798.83 70.9332 1798.83 0.231445Z" fill="#4F7989"/>
          </svg>
          
      </div>
      <div class="content">
        <div class="row gy-5">
          <div class="col-12">
            <div class="invitation">
              <div>
                <div class="img">
                  <img src="/storage/Images/Settings/{{$setting->get('invitation_image')}}" alt="" srcset="" width="538" height="682">
                </div>
                <div class="actions">
                  <form class="w-50" method="POST" action="{{route('invitation.acceptOrReject',$id)}}">
                    @csrf
                    <input type="text" style="display: none" name="status" value="accept">
                    <button class="w-100 accept">قبول الدعوة</button>
                  </form>
                  <form class="w-50" method="POST" action="{{route('invitation.acceptOrReject',$id)}}">
                    @csrf
                    <input type="text" style="display: none" name="status" value="reject">
                    <button class="w-100 reject">رفض الدعوة</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="col-12 col-lg-2 offset-lg-10 logo-container">
            <div class="logo"><img src="../assets/images/logo.jpg" alt="" /></div> --}}
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
