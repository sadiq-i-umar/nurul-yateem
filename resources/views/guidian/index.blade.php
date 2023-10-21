@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Guidian List</h1>
    
    <hr />

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="col-dm-6 mx-2" style="text-align: right;">
                <a href="{{ url('/guidian/create')}}" class="btn btn-primary">Add new Guidian</a>
              </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection