@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h2 class="mb-3">Complete Your Profile Below</h2>
    <hr />
 

<div class="tab-pane mx-4 mt-4" id="settings">
    <form class="form-horizontal" action=" {{ route('sponsor.register.save')}}" method="POST">
        @csrf 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="firstname" class="form-control  @error('firstname')is-invalid @enderror" id="inputName" placeholder="Firstname">
                    @error('firstname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" name="lastname" class="form-control @error('lastname')is-invalid @enderror" id="inputName" placeholder="Lastname">
                @error('lastname')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
         </div>
         <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Other Name</label>
            <div class="col-sm-10">
                <input type="text" name="othername" class="form-control @error('othername')is-invalid @enderror" id="inputName" placeholder="Lastname">
                @error('othername')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
         </div>
        <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="inputEmail" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
        </div>

 
    <div class="form-group row">
        <label for="number" class="col-sm-2 col-form-label">Phone  Number</label>
        <div class="col-sm-10">
            <input type="number" name="phone_number" class="form-control @error('phone_number')is-invalid @enderror" id="inputName2" placeholder="+234 123456789" >
            @error('phone_number')
            <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
</div>
<div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="inputName" placeholder="password">
        @error('password')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
    </div>
 </div>

<div class="form-group row mt-3">
    <div class="offset-sm-2 col-sm-10 mt-3">
        <button type="submit" style="width: 100%" class="btn btn-primary btn-lg">Submit</button>
    </div>
</div>

    <hr style="margin: 40px 0 40px 0" />
    
{{-- Second Phase --}}

    </form>
</div>
    @endsection