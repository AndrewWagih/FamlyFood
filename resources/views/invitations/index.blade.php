@extends('invitations.layout.app')
@section('content')
<section class="invitationsPage">   
  <div class="table-responsive-xl"> <table class="table">
    <tbody>
      @foreach($invitations as $invite)
      <tr>
        <td>
          <div class="basicInfo flexAlign">
          <div class="img"></div>
          <div>
            <div class="title">{{$invite->name}}</div>
            <div class="subTitle">Name</div>
          </div>
          </div>
        </td>
        <td>
          <div class="title">{{$invite->email}}</div>
          <div class="subTitle">Email</div>
        </td>
        <td>
          <div class="title">{{$invite->nationality}}</div>
          <div class="subTitle">Nationality</div>
        </td>
        <td>
          <div class="title">{{$invite->resident_or_passport_id}}</div>
          <div class="subTitle">Resident/Passport ID</div>
        </td>
        <td>
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
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>   
<p>
  {{ $invitations->links() }}
</p>
  
 

<div class="footer">
  <a class="invitationButton" href="{{route('invitations.create')}}"><img src="../assets/icons/search.svg" alt=""> <span>Invite Friend</span></a>

  <div class="logo"><img src="../assets/images/logo.svg" alt=""></div>
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