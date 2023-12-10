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