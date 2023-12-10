<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invitation</title>

    <!-- global  -->
    <link rel="stylesheet" href="../css/global.css" />
  </head>

  <body>
    <div class="layout">
      <div class="head"><img src="../assets/images/head.jpg" alt="" /></div>
      <div class="content">
        <div class="row gy-5">
          <div class="col-12">
            <div class="invitation">
              <div>
                <div class="img">
                  <img src="../assets/images/invitation.svg" alt="" />
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
          <div class="col-12 col-lg-2 offset-lg-10 logo-container">
            <div class="logo"><img src="../assets/images/logo.jpg" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
