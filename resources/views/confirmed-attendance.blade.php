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
  .cardContatiner{
    display: flex;justify-content: center;padding: 50px;margin: 45px 0;
  }
  .customePadding-35{
    padding: 0px 0px 35px 0px;
  }
  @media only screen and (min-width: 600px) and (max-width: 1023px) {
    .cardContatiner{
      margin: 133px 0;
    }
    .customePadding-35{
      padding: 35px;
    }
  }

  /* Laptop styles */
  @media only screen and (min-width: 1024px) {
    .cardContatiner{
      margin: 133px 0;
    }
    .customePadding-35{
      padding: 35px;
    }
    
  }
  /* Mobile styles */
  @media only screen and (max-width: 599px) {
    /* Styles for mobile devices go here */
    .cardContatiner{
      padding: 25px;
      margin: 70px 0;
    }
    .titleHeader,.titleHeader-2{
      font-size: 20px !important
    }
  }
</style>
@endpush
@section('content')
  <div class="container">
    <div class="row cardContatiner"  style="">
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12" style="border-radius: 38px;background: #FFF;box-shadow: 0px 21px 13.9px 0px rgba(0, 0, 0, 0.15);">
          <div class="row">
            <div class="titleHeader col-12" style="
                display: flex;
                justify-content: center;
                align-items: center;
                color: #0A2C36;
                text-align: center;
                font-size: 25px;
                font-weight: 700;
                padding-top: 50px;
            ">
              {{__('Attendance confirm')}}
            </div>
            <div class="titleHeader-2 col-12" style="
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center;
              font-size: 35px;
              font-weight: 100;
              color: #4F7989;

            ">
              {{__('The inauguration ceremony of the Arab Observatory')}}
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
            <div class="col-12">
              <div class="row customePadding-35">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50"  viewBox="0 0 63 62" fill="none">
                        <path d="M63 31C45.7148 31 31.6619 17.1815 31.5 -1.37691e-06C31.3909 17.1815 17.3381 31 2.45964e-06 31C17.3381 31 31.3942 44.8709 31.5 62C31.6619 44.8742 45.7148 31 63 31Z" fill="#FFA389"/>
                      </svg>
                      <span style="
                          font-size: 20px;
                          color: #0A2C36;
                      ">{{__('Name of invitee')}}:</span>
                      <span style="
                          font-size: 25px;
                          color: #4F7989;
                      ">{{$invitation->name??''}}</span>
                    </div>
                    @foreach($invitation->sub as $sub)
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50"  viewBox="0 0 63 62" fill="none">
                        <path d="M63 31C45.7148 31 31.6619 17.1815 31.5 -1.37691e-06C31.3909 17.1815 17.3381 31 2.45964e-06 31C17.3381 31 31.3942 44.8709 31.5 62C31.6619 44.8742 45.7148 31 63 31Z" fill="#FFA389"/>
                      </svg>
                      <span style="
                          font-size: 20px;
                          color: #0A2C36;
                      ">{{__('Facilities name')}}:</span>
                      <span style="
                          font-size: 25px;
                          color: #4F7989;
                      ">{{$sub->name}}</span>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 p-5">
              <form method="POST" action="{{route('confirmed-attended',$invitation->id)}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">{{__('Password')}}</label>
                  <input type="password" class="form-control" required name="password" placeholder="{{__('Please enter the password')}}">
                </div>
                @if ($errors->has('password'))
                  <div class="form-group">
                    <label for="exampleInputEmail1"><strong class="text-danger">{{ $errors->first('password') }}</strong></label>
                  </div>
                @endif
                <div class="form-group py-3">
                  <button class="btn btn-primary w-100">{{__('Attendance confirm')}}</button>
                </div>
              </form>
            </div>
          </div>
      </div>
      
    </div>
      
  </div>

@endsection
@push('scripts')
@endpush