@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h2 class="mb-3">Complete Your Profile Below</h2>
    <hr />
 
   
<div class="tab-pane mx-4 mt-4" id="settings">
    <form class="form-horizontal" action="{{ route('orphan.register.save')}}" method="POST">
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
                    <input type="email" class="form-control" id="inputName" placeholder="Firstname">
                </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Lastname">
            </div>
         </div>
         <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Other Name</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Lastname">
            </div>
         </div>
        <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label="Default select example">
                    <option selected>--------</option>
                    <option  value="1">Female</option>
                    <option value="2">Male</option>
                    <option value="3">Others</option>
                  </select>
            </div>
    </div>  
    <div class="form-group row">
        <label for="number" class="col-sm-2 col-form-label">Phone  Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputName2" placeholder="+234 123456789" >
        </div>
</div>
<div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputName" placeholder="password">
    </div>
 </div>
 <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
        <div class="checkbox">
            <label>
            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
        </label>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
        <button type="submit" style="width: 50%" class="btn btn-primary btn-lg">Submit</button>
    </div>
</div>

    <hr style="margin: 40px 0 40px 0" />
    
{{-- Second Phase --}}


   

    </form>
</div>
    @endsection