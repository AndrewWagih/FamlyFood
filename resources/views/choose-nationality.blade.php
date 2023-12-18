@extends('web-layout.app')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
<style>
  body{
    background: #d6d6d6 !important;
    background-image: url('/assets/images/Rectangle.png') !important;
    background-repeat: no-repeat !important;
    background-position: bottom left !important;
    background-size: 15% !important;
    height: 100% !important;
  }
  #nationality a{
    transition: 0.6s;
    background: #D9D9D9;
  }
  #nationality a:hover, #nationality a:focus, #nationality a:active {
    transition: 0.6s;
    background: #0A2C36;
  }
  .cardContatiner{
    display: flex;justify-content: center;padding: 50px;margin: 45px 0;
  }
  @media only screen and (min-width: 600px) and (max-width: 1023px) {
    .cardContatiner{
      margin: 133px 0;
    }
  }

  /* Laptop styles */
  @media only screen and (min-width: 1024px) {
    .cardContatiner{
      margin: 133px 0;
    }
    
  }
</style>
@endpush
@section('content')
  <div class="container">
    <div class="row cardContatiner"  style="">
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12" style="border-radius: 38px;background: #FFF;box-shadow: 0px 21px 13.9px 0px rgba(0, 0, 0, 0.15);">
          <div class="row flex justify-content-center">
            <div class="titleHeader col-12" style="
                align-items: center;
                color: #0A2C36;
                text-align: center;
                font-size: 25px;
                font-weight: 700;
                padding-top: 50px;
            ">
              {{__('To continue your registration, please choose')}}
            </div>
            <div class="titleHeaderIcon col-12">
              <svg width="100%" viewBox="0 0 1233 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-1.7819e-05 57L1233 57" stroke="url(#paint0_linear_0_1)" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M1194 57C1162.45 57 1136.8 31.5917 1136.5 -2.51341e-06C1136.3 31.5917 1110.65 57 1079 57C1110.65 57 1136.31 82.5046 1136.5 114C1136.8 82.5106 1162.45 57 1194 57Z" fill="#FFA389"/>
                <defs>
                <linearGradient id="paint0_linear_0_1" x1="1233" y1="57.5" x2="0" y2="57.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FFA389"/>
                </linearGradient>
                </defs>
              </svg>
    
            </div>
            <div class="col-12" style="
                display: flex;
                justify-content: center;
                color: #0A2C36;
                font-size: 25px;
                font-weight: 700;
                margin: -10pxß
            ">
              {{__('Nationality')}}
            </div>
            <div class="row py-5" id="nationality">
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                <div style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin:25px
                ">
                  <a href="{{route('questionnaire',['id'=>request()->invitation_id,'is_saudi' => 'yes'])}}" style="text-align: center;width: 200px;padding: 20px;border-radius: 31px;box-shadow: 0px 4px 10.9px 0px rgba(0, 0, 0, 0.15);color: #FFF;font-size: 24px;">{{__('Saudi')}}</a>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin:25px
                ">
                  <a href="{{route('questionnaire',['id'=>request()->invitation_id,'is_saudi' => 'no'])}}" style="text-align: center;width: 200px;padding: 20px;border-radius: 31px; box-shadow: 0px 4px 10.9px 0px  rgba(0, 0, 0, 0.15);;color: #FFF;font-size: 24px;">{{__('Not Saudi')}}</a>
                </div>
              </div>
            </div>
          </div>
      </div>
      
    </div>
      
  </div>

@endsection
@push('scripts')
@endpush