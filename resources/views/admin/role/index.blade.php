@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Manage Role of the User   </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Role tables</li>
          </ol>
        </nav>
      </div>
      <a href="{{route("role.create")}}">
        <button  type="button" class="btn btn-primary mb-4">Add Role </button>
            </a>

            @if(session()->has('message'))
            <div class="alert alert-success">

        {{ session()->get('message') }}
            </div>

        @endif


        @if(session()->has('delete'))
        <div class="alert alert-danger">
        {{ session()->get('delete') }}

        </div>

        @endif
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <thead>



                  <tr>
                    <th>id</th>
                    <th>Role Name</th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($roles as $role)
                  <tr>
                    <td><label class="badge badge-dark">{{$role->id}}</label></td>
                    <td>{{$role->name}}</</td>

                    <td>
                      <form action = "{{route("role.destroy" , $role->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="btn btn-danger btn-sm">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("role.edit" , $role->id )}}" data-toggle="tooltip" title="Edit" class="btn btn-success btn-sm">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>


            </div>
          </div>
        </div>


@endsection
