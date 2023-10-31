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
                <a href="{{ url('admin/guidian/create')}}" class="btn btn-primary">Add new Guidian</a>
              </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                    <thead>
                       
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Action</th>
                        
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach($getRecord as $value)  
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->firstname }}</td>
                            <td>{{ $value->lastname }}</td>
                            <td>{{ $value->email }}</td>
                       <td class="text-center">
                        <a href="{{ url('admin/guidian/profile')}}" class="btn btn-secondary font-weight-bold  mr-4" data-toggle="tooltip" data-original-title="Edit user">
                            View
                            </a>
                          <a href="{{ url('admin/guidian/edit/'.$value->id)}}" class="btn btn-success font-weight-bold  mr-4 " data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                          </a>
                          <a href="{{ url('admin/guidian/delete/'.$value->id)}}" class="btn btn-danger font-weight-bold mr-4" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                            </a>
                       </td>
                  
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection