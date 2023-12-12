@extends('invitations.layout.app')
@section('content')
<section class="invitationsPage">   
  <h1 class="d-flex justify-content-center fw-bolder">{{__('Inauguration attendance data')}}</h1>
  <div class="d-flex justify-content-end">
    <a href="{{route('exportInvitations')}}" class="btn text-white p3 rounded" style="background: #283645;">
      {{__('Download file')}}
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
        <g clip-path="url(#clip0_219_4673)">
          <path d="M10.2754 1.12347C10.1882 1.05259 10.0733 1.0255 9.96362 1.04994L0.402587 3.25633C0.234315 3.29501 0.115584 3.44553 0.117204 3.61818V16.1211C0.117273 16.3025 0.249691 16.4569 0.42903 16.4844L9.99006 17.9554C10.1908 17.9862 10.3786 17.8485 10.4094 17.6478C10.4122 17.6294 10.4137 17.6107 10.4137 17.5921V1.41179C10.414 1.29964 10.3631 1.19349 10.2754 1.12347Z" fill="#FAFAFA"/>
          <path d="M17.4002 16.4888H10.0455C9.84239 16.4888 9.67773 16.3242 9.67773 16.1211C9.67773 15.918 9.84239 15.7534 10.0455 15.7534H17.0324V3.25047H10.0455C9.84239 3.25047 9.67773 3.08582 9.67773 2.88272C9.67773 2.67963 9.84239 2.51501 10.0455 2.51501H17.4001C17.6032 2.51501 17.7679 2.67967 17.7679 2.88276V16.1211C17.7679 16.3242 17.6032 16.4888 17.4002 16.4888Z" fill="#FAFAFA"/>
          <path d="M7.10416 12.8116C6.97736 12.8116 6.85952 12.7463 6.79233 12.6388L3.115 6.75507C3.00195 6.58635 3.04711 6.35792 3.21583 6.24488C3.38455 6.13183 3.61299 6.177 3.72603 6.34572C3.73048 6.35234 3.73468 6.35909 3.73868 6.36599L7.41602 12.2497C7.52324 12.4222 7.47035 12.6489 7.29787 12.7562C7.23971 12.7923 7.17263 12.8115 7.10416 12.8116Z" fill="#283645"/>
          <path d="M3.42753 12.8115C3.22444 12.8111 3.06013 12.6461 3.06055 12.4431C3.06069 12.3744 3.08006 12.3071 3.11643 12.2489L6.79377 6.36516C6.89561 6.18944 7.12063 6.12956 7.29631 6.2314C7.47203 6.33324 7.53191 6.55825 7.43007 6.73394C7.42607 6.74083 7.42187 6.74759 7.41742 6.75421L3.74012 12.6379C3.67296 12.746 3.55475 12.8116 3.42753 12.8115Z" fill="#283645"/>
          <path d="M12.9869 16.4888C12.7838 16.4888 12.6191 16.3242 12.6191 16.1211V2.8827C12.6191 2.67961 12.7838 2.51495 12.9869 2.51495C13.19 2.51495 13.3546 2.67961 13.3546 2.8827V16.1211C13.3546 16.3242 13.19 16.4888 12.9869 16.4888Z" fill="#FAFAFA"/>
          <path d="M17.4002 14.2824H10.0455C9.84239 14.2824 9.67773 14.1178 9.67773 13.9147C9.67773 13.7116 9.84239 13.5469 10.0455 13.5469H17.4001C17.6032 13.5469 17.7679 13.7116 17.7679 13.9147C17.7679 14.1178 17.6032 14.2824 17.4002 14.2824Z" fill="#FAFAFA"/>
          <path d="M17.4002 12.076H10.0455C9.84239 12.076 9.67773 11.9114 9.67773 11.7083C9.67773 11.5052 9.84239 11.3405 10.0455 11.3405H17.4001C17.6032 11.3405 17.7679 11.5052 17.7679 11.7083C17.7679 11.9114 17.6032 12.076 17.4002 12.076Z" fill="#FAFAFA"/>
          <path d="M17.4002 9.86964H10.0455C9.84239 9.86964 9.67773 9.70499 9.67773 9.5019C9.67773 9.29881 9.84239 9.13416 10.0455 9.13416H17.4001C17.6032 9.13416 17.7679 9.29881 17.7679 9.5019C17.7679 9.70503 17.6032 9.86964 17.4002 9.86964Z" fill="#FAFAFA"/>
          <path d="M17.4002 7.66322H10.0455C9.84239 7.66322 9.67773 7.49857 9.67773 7.29548C9.67773 7.09239 9.84239 6.92773 10.0455 6.92773H17.4001C17.6032 6.92773 17.7679 7.09239 17.7679 7.29548C17.7679 7.49857 17.6032 7.66322 17.4002 7.66322Z" fill="#FAFAFA"/>
          <path d="M17.4002 5.45686H10.0455C9.84239 5.45686 9.67773 5.29221 9.67773 5.08912C9.67773 4.88603 9.84239 4.72137 10.0455 4.72137H17.4001C17.6032 4.72137 17.7679 4.88603 17.7679 5.08912C17.7679 5.29224 17.6032 5.45686 17.4002 5.45686Z" fill="#FAFAFA"/>
        </g>
        <defs>
          <clipPath id="clip0_219_4673">
            <rect width="17.6512" height="17.6512" fill="white" transform="translate(0.117188 0.674805)"/>
          </clipPath>
        </defs>
      </svg>

    </a>
  </div>
  <div class="table-responsive-xl"> 
    <table class="table">
      <thead>
        <tr>
          <td>
            <span>{{__('Names of invitees')}}</span>
          </td>
          <td>
            <span>{{__('Email')}}</span>
          </td>
          <td>
            <span>{{__('Nationalities')}}</span>
          </td>
          <td>
            <span>{{__('Phones')}}</span>
          </td>
          <td>
            <span>{{__('Identity of the invitees')}}</span>
          </td>
          <td>
            <span>{{__('Number of companions')}}</span>
          </td>
          {{-- <td>
            <span>رابط الدعوة</span>
          </td>
          <td>
            <span>حالة الدعوة</span>
          </td> --}}
        </tr>
      </thead>
      <tbody>
        @foreach($invitations as $invite)
        <tr>
          <td>
            <div class="basicInfo flexAlign">
            <div>
              <div class="title">{{$invite->name}}</div>
              <div class="subTitle">{{__('Name')}}</div>
            </div>
            </div>
          </td>
          <td>
            <div class="title">{{$invite->email}}</div>
            <div class="subTitle">{{__('Email')}}</div>
          </td>
          <td>
            <div class="title">{{$invite->nationality}}</div>
            <div class="subTitle">{{__('Nationality')}}</div>
          </td>
          <td>
            <div class="title">{{$invite->phone}}</div>
            <div class="subTitle">{{__('Phone')}}</div>
          </td>
          <td>
            <div class="title">{{$invite->resident_or_passport_id}}</div>
            <div class="subTitle">{{__('Resident / Passport ID')}}</div>
          </td>
          <td class="text-center">
            <div class="title">{{$invite->sub->count()}}</div>
          </td>
          
          {{-- <td>
            <button onclick="copyLinkToClipboard('{{route('invitation',$invite->id)}}')" class="btn copyUrl"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/></svg></button>
          </td>
          <td>
            <div class="status @if($invite->status == 'accept') accepted @elseif($invite->status == 'reject') ignored @endif ">
              @if($invite->status == 'accept')
              قبل الدعوة
              @elseif($invite->status == 'reject')
              رقض الدعوة
              @elseif($invite->status == 'pending')
              لم يتم الرد بعد
              @endif
            </div>
          </td> --}}
        </tr>
        @endforeach
      </tbody>
    </table>
</div>   
<p>
  {{ $invitations->links() }}
</p>
  
 

<div class="footer">
  <div class="logo"><img src="{{asset('assets/images/logo.svg')}}" width="300px" alt=""></div>
  <a class="invitationButton" href="{{route('invitations.create')}}">+ <span>{{__('Invite')}}</span></a>
</div>
</section>
@endsection

@push('scripts')
<script>
  function copyLinkToClipboard(textValue) {
    var tempInput = $('<input>');
    $('body').append(tempInput);
    tempInput.val(textValue).select();
    document.execCommand('copy');
    tempInput.remove();
  }

</script>
@endpush