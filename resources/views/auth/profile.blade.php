@extends('layouts.app')
  
@section('title', 'Profile')
  
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
 

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
        
        <div class="card card-primary card-outline">
                 <div class="card-body box-profile">
                    <div class="text-center">
                         <img class="profile-user-img img-fluid img-circle" src="" alt="">
        </div>
          
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                         <b>{{ auth()->user()->firstname }}</b> 
                    </li>
                    <li class="list-group-item">
                        <b>{{ auth()->user()->lastname }}</b>
                     </li>
                     <li class="list-group-item">
                        <b>{{ auth()->user()->email }}</b> 
                     </li>
                 </ul>
                 {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
        </div>
        
        </div>
        
        
        <div class="card card-primary">
               
 
        
        </div>
        
        </div>
        
        <div class="col-md-9">
                 <div class="card">
                      <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                 <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
        </div>
        <div class="card-body">
                     <div class="tab-content">
                         <div class="active tab-pane" id="activity">
        
                             <div class="post">
                                
        
                 

        </div>
        
        
      
        
        
        <div class="post">
        
        
        <div class="row mb-3">
        
        
        
        </div>
        
             </div>
        
        </div>
        
        <div class="tab-pane" id="timeline">
        
        <div class="timeline timeline-inverse">
        
      
        
        
       
        
    
            
        <div>
        <i class="far fa-clock bg-gray"></i>
        </div>
        </div>
        </div>
        
       
        
        </div>
        
        </div>
        </div>
        
        </div>
        
        </div>
        
        </div>
        </section>
@endsection