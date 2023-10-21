@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h2 class="mb-3">Complete Your Profile Below</h2>
    <hr />
 
<h3 class="mb-3">Bio Data</h3>
<div class="tab-pane  mt-4" id="settings">
    <form class="form-horizontal">
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
    <label for="inputName" class="col-sm-2 col-form-label">DOB</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="inputName" placeholder="Lastname">
    </div>
 </div>

    <hr style="margin: 40px 0 40px 0" />
    
{{-- Second Phase --}}


    <h3 class="mb-3">OTHER  DATA</h3>

    <div class="form-group row mt-4">
        <label for="number" class="col-sm-2 col-form-label">Alternative Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control"  placeholder="+234 5678901" >
        </div>
</div>
    <div class="form-group mt-4 row">
        <label for="inputName2" class="col-sm-2 col-form-label">Profile Image</label>
        <div class="col-sm-10">
            <input style="height: 60px;" type="file" class="form-control" id="customFile" />
        </div>
</div>
    

    <div class="form-group row">
        <label for="number" class="col-sm-2 col-form-label">Employment Status</label>
        <div class="col-sm-10">
            <select class="form-control" aria-label="Default select example">
                <option selected>--------</option>
                <option  value="1">Employed</option>
                <option value="2">Unemployed</option>
                <option value="3">Selfemployed</option>
              </select>
        </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Annual Income</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="inputName2" placeholder="100,000" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Nature of Occupation</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName2" placeholder="School Teacher" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Employer Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName2" placeholder="Mr Joshua caleb" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Employer Address</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName2" placeholder="address" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Employer Phone</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="inputName2" placeholder="+234 5678901" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Means of Identity</label>
    <div class="col-sm-10">
        <select class="form-control" aria-label="Default select example">
            <option selected>--------</option>
            <option  value="1">National Id</option>
            <option value="2">Voters Card</option>
            <option value="3">Driver Licence</option>
            <option value="3">International Passport</option>
          </select>
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Identity  Number</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="inputName2" placeholder="1234567890" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">iD issue  Date</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="inputName2" placeholder="" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Id Expiry Date</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="inputName2" placeholder="" >
    </div>
</div>
<div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Marrital Status</label>
    <div class="col-sm-10">
        <select class="form-control" aria-label="Default select example">
            <option selected>--------</option>
            <option  value="1">Single</option>
            <option value="2">Married</option>
            <option value="3">Complicated</option>
            
          </select>
</div>
</div>
    
        <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Other Information </label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Others "></textarea>
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
    </form>
</div>
    @endsection