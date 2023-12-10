<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questionnaire</title>

    <!-- global  -->
    <link rel="stylesheet" href="../css/global.css" />
    <style>
      .invalid-feedback{
        margin-top: -40px;
      margin-bottom: 20px;
      }
    </style>
  </head>

  <body>
    <div class="layout">
      <div class="head"><img src="../assets/images/head.jpg" alt="" /></div>
      <div class="content">
        <div class="row gy-5">
          <div class="col-12">
            <div class="questionnaire">
              <form method="POST" action="{{route('submitQuestionnaire',$id)}}">
                @csrf
                <div class="head">
                  <h1>الرجاء ملئ استبيان</h1>
                  <p>معلومات مطلوبة لحضور حفل التدشين</p>
                </div>
                <div>
                  <div class="labels"><span>Name</span> <span>الأسم</span></div>
                  <input type="text" name="name" />
                  @if ($errors->has('name'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <div>
                  <div class="labels"><span>Nationality</span> <span>الجنسية</span></div>
                  <select name="nationality" id="">
                    @foreach($nationalities as $nationality)
                      <option value="{{$nationality}}">{{$nationality}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('nationality'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('nationality') }}</strong>
                    </span>
                  @endif
                </div>
                <div>
                  <div class="labels"><span>Residnet / Passport id</span> <span>رقم الهوية / الجواز</span></div>
                  <input type="text" name="resident_or_passport_id" />
                  @if ($errors->has('resident_or_passport_id'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('resident_or_passport_id') }}</strong>
                    </span>
                  @endif
                </div>

                <button>ارسال</button>
              </form>
            </div>
          </div>
          <div class="col-12 col-lg-2 offset-lg-10  logo-container">
            <div class="logo"><img src="../assets/images/logo.jpg" alt="" /></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
