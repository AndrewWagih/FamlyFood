@extends('invitations.layout.app')
@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Invitation Image</h1>
      <form method="POST" action="{{route('storeInvitationSetting')}}" enctype="multipart/form-data">
        @csrf()
        <div class="row g-3">
          <div class="col-md-12">
            <label for="invitation_image" class="form-label">invitation image <span class="text-danger">*</span></label>
            <input type="file" required class="form-control" id="invitation_image" name="invitation_image"  placeholder="Please select the invitation image">
            <br><br>
            @if ($errors->has('invitation_image'))
              <span class="invalid-feedback d-block">
                  <strong>{{ $errors->first('invitation_image') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-12">
                <button  type="submit" class="btn btn-dark w-100 fw-bold">Save</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-md-12 my-2">
          <a  href="{{route('invitations')}}" class="btn btn-danger w-100 fw-bold">Cancel</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection