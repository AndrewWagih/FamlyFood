<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta required name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questionnaire</title>

    <!-- global  -->
    <link rel="stylesheet" href="{{asset('css/global.css')}}" />
    <style>
      
    </style>
  </head>

  <body>
    <div class="layout">
      <div class="head head-section">
        <img src="{{asset('assets/images/head.jpg')}}" alt="" />
        <h1>
          بيانات تأكيد  الحضور
        </h1>
      </div>
      <div class="content content-questionnaire">
        <div class="row gy-5">
          <div class="col-12">
            <div class="questionnaire">
              <form method="POST" action="{{route('submitQuestionnaire',$id)}}">
                @csrf
                <div class="head">
                  {{-- <h1>الرجاء ملئ استبيان</h1> --}}
                  <p>المعلومات المطلوبة لتأكيد حضور حفل التدشين</p>
                </div>
                @if (\Session::has('error-message'))
                <div class="alert alert--error text-white" style="background: #ffc107!important">
                    <i class="fa fa-times-circle fa-2xl icon"></i> 
                    <div class="content">
                        <div class="title"></div>
                        <div class="body">
                            {!! \Session::get('error-message') !!}
                        </div>
                    </div>
                </div>
                @endif
                <div>
                  <div class="labels"><span>Name</span> <span>الأسم</span></div>
                  <input type="text" required name="name" />
                  @if ($errors->has('name'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <div>
                  <div class="labels"><span>Nationality</span> <span>الجنسية</span></div>
                  <select required name="nationality" id="">
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
                  <div class="labels"><span>Phone Number</span> <span>رقم الهاتف</span></div>
                  <input type="tel" required name="phone" />
                </div>
                <div>
                  <div class="labels"><span>Residnet / Passport id</span> <span>رقم الهوية / الجواز</span></div>
                  <input type="text" required name="resident_or_passport_id" />
                  @if ($errors->has('resident_or_passport_id'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('resident_or_passport_id') }}</strong>
                    </span>
                  @endif
                </div>
                <div>
                  <div class="labels"><span>Are there any accompanying?</span> <span>هل هناك أي مرافقين؟</span></div>
                  <div class="custom-radio">
                    <input type="radio" id="radio1" required name="there_any_accompanying" value="yes">
                    <label for="radio1" class="px-2">نعم</label>
                    <span class="px-3"></span>
                    <input type="radio" id="radio1" required name="there_any_accompanying" value="no">
                    <label for="radio1" class="px-2">لا</label>
                  </div>
                  
                </div>
                

                <div class="form-repeter" style="display: none">
                  <div>
                    <div class="labels"><span></span> <span class="h3">بيانات المرافق</span></div>
                  </div>
                  <div>
                    <div class="labels"><span>Name</span> <span>الأسم</span></div>
                    <input type="text" required name="accompanying[0][name]" />
                  </div>
                  <div>
                    <div class="labels"><span>Nationality</span> <span>الجنسية</span></div>
                    <select required name="accompanying[0][nationality]" id="">
                      @foreach($nationalities as $nationality)
                        <option value="{{$nationality}}">{{$nationality}}</option>
                      @endforeach
                    </select>

                  </div>
                  <div>
                    <div class="labels"><span>Phone Number</span> <span>رقم الهاتف</span></div>
                    <input type="tel" required name="accompanying[0][phone]" />
                  </div>
                  <div>
                    <div class="labels"><span>Email</span> <span>البريد الإلكتروني</span></div>
                    <input type="email" required name="accompanying[0][email]" />
                  </div>
                  <div>
                    <div class="labels"><span>Residnet / Passport id</span> <span>رقم الهوية / الجواز</span></div>
                    <input type="text" required name="accompanying[0][resident_or_passport_id]" />
                  </div>
                  
                </div>
                  

                <button class="addNew" style="display: none">اضافة مرافق اخر</button>
                <button>ارسال</button>
              </form>
            </div>
          </div>
          {{-- <div class="col-12 col-lg-2 offset-lg-10  logo-container">
            <div class="logo"><img src="../assets/images/logo.jpg" alt="" /></div>
          </div> --}}
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      let repeterIndex = 1;
      $('.addNew').on('click',function(e){
        e.preventDefault();
        let inputs = `<hr>
                  <div>
                    <div class="labels"><span>Name</span> <span>الأسم</span></div>
                    <input type="text" required name="accompanying[${repeterIndex}][name]" />
                  </div>
                  <div>
                    <div class="labels"><span>Nationality</span> <span>الجنسية</span></div>
                    <select required name="accompanying[${repeterIndex}][nationality]" id="">
                      @foreach($nationalities as $nationality)
                        <option value="{{$nationality}}">{{$nationality}}</option>
                      @endforeach
                    </select>

                  </div>
                  <div>
                    <div class="labels"><span>Phone Number</span> <span>رقم الهاتف</span></div>
                    <input type="tel" required name="accompanying[${repeterIndex}][phone]" />
                  </div>
                  <div>
                    <div class="labels"><span>Email</span> <span>البريد الإلكتروني</span></div>
                    <input type="email" required name="accompanying[${repeterIndex}][email]" />
                  </div>
                  <div>
                    <div class="labels"><span>Residnet / Passport id</span> <span>رقم الهوية / الجواز</span></div>
                    <input type="text" required name="accompanying[${repeterIndex}][resident_or_passport_id]" />
                  </div>`;
        $('.form-repeter').append(inputs);
        repeterIndex++
      });
      $(`input[name="there_any_accompanying"]`).on('change',function(){
        if($(this).val() == 'yes')
        {
          $(`.form-repeter`).show();
          $(`.addNew`).show();
        }else{
          $(`.form-repeter`).hide();
          $(`.addNew`).hide();
          
        }
      });
    </script>
  </body>
</html>
