@extends('web-layout.app')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
@endpush

@push('middle-section-of-nav')
  <div class="fw-bolder fs-5">{{__('Attendance confirmation information')}}</div>
  <div>
    {{__('Information required to confirm attendance at the launch ceremony')}}
  </div>
@endpush
@section('content')
<style>
  
  .iti{
    width: auto;
  }
  .iti--allow-dropdown {
    width: 100%
  }
  .iti__country-list{
    direction: ltr;
    left:0;
  }
</style>
  <div class="container p-5">
    <form method="POST" action="{{route('submitQuestionnaire',$id)}}">
      @csrf
      <div class="row">
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"><span>الأسم</span><span>Name</span></div>
          <input class="customInput" type="text" required name="name" value="{{$invitation->name??''}}" />
          @if ($errors->has('name'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"><span>الجنسية</span><span>Nationality</span></div>
          <select class="customInput" required name="nationality"  id="">
            @foreach($nationalities as $nationality)
              <option @if($nationality == $invitation->nationality) selected @endif value="{{$nationality}}">{{$nationality}}</option>
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
          <input class="customInput" type="email" required name="email" value="{{$invitation->email??''}}" />
        </div>
        <div class="col-xl-4  col-lg-4  px-4 py-2">
          <div class="custom-label py-2"> <span>رقم الهاتف</span><span>Phone Number</span></div>
          <input class="customInput phone" type="tel" required name="phone" value=""  />
        </div>
        <div class="col-xl-8  col-lg-8  px-4 py-2">
          <div class="custom-label py-2"> <span>رقم الهوية / الجواز</span><span>Residnet / Passport id</span></div>
          <input class="customInput" type="text" required name="resident_or_passport_id"  value="{{$invitation->resident_or_passport_id??''}}"  />
          @if ($errors->has('resident_or_passport_id'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('resident_or_passport_id') }}</strong>
            </span>
          @endif
        </div>
        @if(request()->is_saudi != 'yes')
          <div class="row py-2">
            <div class="col-2 custom-label align-items-center px-4" >{{__('Are there companions?')}}</div>
            <div class="col-10 custom-radio">
              <input class="customInput form-check-input" type="radio"  id="radio1" required name="there_any_accompanying" value="yes">
              <label for="radio1" class="px-2">{{__('Yes')}}</label>
              <input class="customInput form-check-input" type="radio" id="radio1" required name="there_any_accompanying" value="no">
              <label for="radio1" class="px-2">{{__('No')}}</label>
            </div>
            
          </div>
        @endif
        
        <div class="row form-repeter" style="display: none">
          <div>
            <div class="custom-label py-2"><span class="h3">{{__('Companion Information')}}</span></div>
          </div>
          
        </div>

        <div class="col-xl-12 col-md-12 col-sm12 px-4 py-2  addNewContainer" style="display: none" >
          <div class="d-flex align-items-center">
            <button class="addNew" > {{__('Add another companion +')}}</button>
            <span class="p-3 text-secondary">{{__('Only 2 companions are allowed to be added')}}</span>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <button style="width: 200px;height: 50px;background: #FFA389;color: white;font-size: 25px;font-weight: 700;">{{__('Send')}}</button>
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
  $(`input[name="there_any_accompanying"]`).on('change',function(){
    
    console.log($(this).val());
    if($(this).val() == 'no')
    {
      $(`.form-repeter`).html(`<div>
          <div class="custom-label py-2"><span class="h3">{{__('Companion Information')}}</span></div>
        </div>`);
      
    }

  });
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