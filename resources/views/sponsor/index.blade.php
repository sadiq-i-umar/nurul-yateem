@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Orphan List</h1>
    
    <hr />

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="col-dm-6 mx-2" style="text-align: right;">
             
              </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Class</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>

                                <a href="" class="btn btn-secondary font-weight-bold  mr-4" data-toggle="tooltip" data-original-title="Edit user">
                                    View
                                    </a>
                                  <a href="" class="btn btn-success font-weight-bold  mr-4 " data-toggle="tooltip" data-original-title="Edit user">
                                  Sponsor
                                  </a>
                                  
                            </td>
                        </tr>
   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection