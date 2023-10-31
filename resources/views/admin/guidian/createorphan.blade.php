@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h2 class="mb-3">Add Ophans</h2>
    <hr />
    <h3 class="mb-3"></h3>
    <div class="tab-pane mt-4" id="settings">
        <form class="form-horizontal" action=" {{ route('save.guidian.register')}}" method="POST">
            @csrf @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    
            @endif
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input name="firstname" type="text" class="form-control @error('firstname')is-invalid @enderror" id="firstname" />
                    @error('firstname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">Mid Name</label>
                <div class="col-sm-10">
                    <input name="midname" type="text" class="form-control @error('midname')is-invalid @enderror" id="firstname" />
                    @error('midname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input name="firstname" type="text" class="form-control @error('firstname')is-invalid @enderror" id="firstname" />
                    @error('firstname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" class="form-control @error('gender')is-invalid @enderror" aria-label="Default select example">
                        <option selected>--------</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                        <option value="3">Others</option>
                    </select>
                    @error('gender')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="date" name="dob" class="form-control @error('dob')is-invalid @enderror" id="inputName" placeholder="Lastname" />
                    @error('dob')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">Profile Image</label>
                <div class="col-sm-10">
                    <input name="profile_img" style="height: 60px;" type="file" class="form-control @error('profile_img')is-invalid @enderror" id="customFile" />
                    @error('profile_img')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
    
            
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">State of Origin</label>
                <div class="col-sm-10">
                    <input type="text" name="stateoforigin" class="form-control @error('stateoforigin')is-invalid @enderror" id="inputName2" placeholder="" />
                    @error('stateoforigin')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
           
    
            <hr style="margin: 40px 0 40px 0;" />
    
            {{-- Second Phase --}}
    
            <h3 class="mb-3">OTHER DATA</h3>
    
            <div class="form-group row mt-4">
                <label for="number" class="col-sm-2 col-form-label">Local Government Area</label>
                <div class="col-sm-10">
                    <input type="text" name="lga" class="form-control @error('lga')is-invalid @enderror" placeholder="" />
                    @error('lga')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
           
    
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Schooling Status</label>
                <div class="col-sm-10">
                    <select name="schoolstatus" class="form-control @error('schoolstatus')is-invalid @enderror" aria-label="Default select example">
                        <option selected>--------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                    @error('schoolstatus')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">School Name</label>
                <div class="col-sm-10">
                    <input type="text" name="schoolname" class="form-control @error('schoolname')is-invalid @enderror" id="inputName2" placeholder="" />
                    @error('schoolname')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">School Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="schoolphonenumber" class="form-control @error('schoolphonenumber')is-invalid @enderror" id="inputName2" placeholder="School Teacher" />
                    @error('schoolphonenumber')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">School Email</label>
                <div class="col-sm-10">
                    <input type="email" name="schoolemail" class="form-control @error('schoolemail')is-invalid @enderror" id="inputName2" placeholder="Mr Joshua caleb" />
                    @error('schoolemail')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-10">
                    <input type="text" name="class" class="form-control @error('class')is-invalid @enderror" id="inputName2" placeholder="address" />
                    @error('class')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
      
            <div class="form-group mt-4 row">
                <label for="inputName2" class="col-sm-2 col-form-label">Guidian Affidavit</label>
                <div class="col-sm-10">
                    <input name="affidavit" style="height: 60px;" type="file" class="form-control @error('affidavit')is-invalid @enderror" id="customFile" />
                    @error('affidavit')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
    
            <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Other Information </label>
                <div class="col-sm-10">
                    <textarea name="other_information" class="form-control @error('other_information')is-invalid @enderror" id="inputExperience" placeholder="Others "></textarea>
                    @error('other_information')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
    
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" style="width: 50%;" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
    @endsection