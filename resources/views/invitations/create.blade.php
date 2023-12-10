@extends('invitations.layout.app')
@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Create Invitation</h1>
      <form method="POST" action="{{route('invitations.store')}}">
        @csrf()
        <div class="row g-3">
          <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Please enter the name">
            @if ($errors->has('name'))
              <span class="invalid-feedback d-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Please enter the email">
            @if ($errors->has('email'))
              <span class="invalid-feedback d-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          
          <div class="col-md-12">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Please enter the nationality">
            @if ($errors->has('nationality'))
              <span class="invalid-feedback d-block">
                  <strong>{{ $errors->first('nationality') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-md-12">
            <label for="resident_or_passport_id" class="form-label">Resident/Passport ID</label>
            <input type="text" class="form-control" id="resident_or_passport_id" name="resident_or_passport_id" placeholder="Please enter the Resident/Passport ID">
            @if ($errors->has('resident_or_passport_id'))
              <span class="invalid-feedback d-block">
                  <strong>{{ $errors->first('resident_or_passport_id') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-12">
                <button  type="submit" class="btn btn-dark w-100 fw-bold">Send</button>
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