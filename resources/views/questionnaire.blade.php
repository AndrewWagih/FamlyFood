@extends('web-layout.app')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
@endpush

@push('middle-section-of-nav')
  <div class="fw-bolder fs-5">بيانات تاكيد الحضور</div>
  <div>
    المعلومات اللازمة لتأكيد حضور حڡل التدشٮ﮵ن
  </div>
@endpush
@section('content')
  <div class="container p-5">
    <form method="POST" action="{{route('submitQuestionnaire',$id)}}">
      @csrf
      <div class="row">
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"><span>الأسم</span><span>Name</span></div>
          <input class="customInput" type="text" required name="name" />
          @if ($errors->has('name'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"><span>الجنسية</span><span>Nationality</span></div>
          <select class="customInput" required name="nationality" id="">
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
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"><span>البريد الإلكتروني</span><span>Email</span></div>
          <input class="customInput" type="email" required name="accompanying[0][email]" />
        </div>
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"> <span>رقم الهاتف</span><span>Phone Number</span></div>
          <input class="customInput phone" type="tel" required name="phone" />
        </div>
        <div class="col-xl-8  col-lg-8  px-4 py-2">
          <div class="custom-label py-2"> <span>رقم الهوية / الجواز</span><span>Residnet / Passport id</span></div>
          <input class="customInput" type="text" required name="resident_or_passport_id" />
          @if ($errors->has('resident_or_passport_id'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('resident_or_passport_id') }}</strong>
            </span>
          @endif
        </div>
        @if(request()->is_saudi != 'yes')
          <div class="row py-2">
            <div class="col-2 custom-label align-items-center px-4" >هل هناك أي مرافقين؟</div>
            <div class="col-10 custom-radio">
              <input class="customInput form-check-input" type="radio"  id="radio1" required name="there_any_accompanying" value="yes">
              <label for="radio1" class="px-2">نعم</label>
              <input class="customInput form-check-input" type="radio" id="radio1" required name="there_any_accompanying" value="no">
              <label for="radio1" class="px-2">لا</label>
            </div>
            
          </div>
        @endif
        
        <div class="row form-repeter" style="display: none">
          <div>
            <div class="custom-label py-2"><span class="h3">بيانات المرافق</span></div>
          </div>
          <div class="col-xl-4  col-lg-4  px-4 py-2">
            <div class="custom-label py-2"><span>الأسم</span><span>Name</span></div>
            <input class="customInput" type="text" required name="accompanying[0][name]" />
          </div>
          <div class="col-xl-4  col-lg-4  px-4 py-2">
            <div class="custom-label py-2"><span>الجنسية</span><span>Nationality</span></div>
            <select class="customInput" required name="accompanying[0][nationality]" id="">
              @foreach($nationalities as $nationality)
                <option value="{{$nationality}}">{{$nationality}}</option>
              @endforeach
            </select>
  
          </div>
          <div class="col-xl-4  col-lg-4  px-4 py-2">
            <div class="custom-label py-2"><span>البريد الإلكتروني</span><span>Email</span></div>
            <input class="customInput" type="email" required name="accompanying[0][email]" />
          </div>
          <div class="col-xl-4  col-lg-4  px-4 py-2">
            <div class="custom-label py-2"><span>رقم الهاتف</span><span>Phone Number</span></div>
            <input class="customInput phone" type="tel" required name="accompanying[0][phone]" />
          </div>
          
          <div class="col-xl-8  col-lg-8  px-4 py-2">
            <div class="custom-label py-2"><span>رقم الهوية / الجواز</span><span>Residnet / Passport id</span></div>
            <input class="customInput" type="text" required name="accompanying[0][resident_or_passport_id]" />
          </div>
          
        </div>
        <div style="display: none">
          
        </div>
        <div class="col-xl-12 col-md-12 col-sm12 px-4 py-2  addNewContainer" style="display: none" >
          <div class="d-flex align-items-center">
            <button class="addNew" > + اضافة مرافق اخر</button>
            <span class="p3 text-secondary">يسمح بإضافة عدد 2 مرافق فقط</span>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <button style="width: 200px;height: 50px;background: #FFA389;color: white;font-size: 25px;font-weight: 700;">ارسال</button>
        </div>
      </div>
        

    </form>
  </div>

@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
<script>

  function phoneCode(is_new=false)
  {
    var elements = document.getElementsByClassName("phone");
    if(is_new == true){
      var latestElement = elements[elements.length - 1];
      generateElementPhoneCode(latestElement)
      return ;
    }
    Array.from(elements).forEach(function(element) {
      generateElementPhoneCode(element);
    });
  }
  function generateElementPhoneCode(element)
  {
    window.intlTelInput(element, {
        autoPlaceholder:"polit",
        formatOnDisplay:true,
        hiddenInput: "countryCode",

        placeholderNumberType: "MOBILE",
        preferredCountries: ['sa'],
        separateDialCode: true,
    });
  }
  phoneCode();

  $('form').submit(function(e){
      e.preventDefault;
      // let phone = $('input[name="phone"]').val()
      // $('input[name="phone"]').val($('.iti__selected-dial-code').text()+phone);
      // console.log($('.iti__selected-dial-code').text());
      var phones = document.getElementsByClassName("phone");
      var phoneCodes = document.getElementsByClassName("iti__selected-dial-code");
      Array.from(phones).forEach(function(phone,index) {
        phone.value =  phoneCodes[index].textContent + phone.value;
      });
  })
</script>
<script>
  let repeterIndex = 1;
  $('.addNew').on('click',function(e){
    e.preventDefault();
    let inputs = `<hr>
              <div class="col-xl-4  col-lg-4  px-4 py-2">
                <div class="custom-label py-2"> <span>الأسم</span><span>Name</span></div>
                <input class="customInput" type="text" required name="accompanying[${repeterIndex}][name]" />
              </div>
              <div class="col-xl-4  col-lg-4  px-4 py-2">
                <div class="custom-label py-2"> <span>الجنسية</span><span>Nationality</span></div>
                <select class="customInput" required name="accompanying[${repeterIndex}][nationality]" id="">
                  @foreach($nationalities as $nationality)
                    <option value="{{$nationality}}">{{$nationality}}</option>
                  @endforeach
                </select>

              </div>
              <div class="col-xl-4  col-lg-4  px-4 py-2">
                <div class="custom-label py-2"><span>رقم الهاتف</span><span>Phone Number</span> </div>
                <input class="customInput phone" type="tel" required name="accompanying[${repeterIndex}][phone]" />
              </div>
              <div class="col-xl-4  col-lg-4  px-4 py-2">
                <div class="custom-label py-2"> <span>البريد الإلكتروني</span><span>Email</span></div>
                <input class="customInput" type="email" required name="accompanying[${repeterIndex}][email]" />
              </div>
              <div class="col-xl-8  col-lg-8  px-4 py-2">
                <div class="custom-label py-2"> <span>رقم الهوية / الجواز</span><span>Residnet / Passport id</span></div>
                <input class="customInput" type="text" required name="accompanying[${repeterIndex}][resident_or_passport_id]" />
              </div>`;
    $('.form-repeter').append(inputs);
    repeterIndex++
    phoneCode(true);
  });
  $(`input[name="there_any_accompanying"]`).on('change',function(){
    if($(this).val() == 'yes')
    {
      $(`.form-repeter`).show();
      $(`.addNewContainer`).show();
    }else{
      $(`.form-repeter`).hide();
      $(`.addNewContainer`).hide();
      
    }
  });
</script>
@endpush