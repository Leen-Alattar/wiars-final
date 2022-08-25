@extends('admin.layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Manage Jordan Foundation   </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foundation Name tables</li>
          </ol>
        </nav>
      </div>
      <a href="{{route("category.create")}}">
        <button type="button" class="btn btn-primary mb-3">Add </button>
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
                    <th>#</th>
                    <th>Foundation Name </th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>With Doses </th>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                <tbody>
                  @foreach ($categorys as $category)
                  <tr>
                    <td><label class="badge badge-dark">{{$category->id}}</label></td>
                                     <td>{{$category->name}}</td>
                    <td>{{$category->description}}</</td>
                    <td>{{$category->icon}}</</td>
                    <td>{{$category->with_doses}}</</td>

                    <td>
                      <form action = "{{route("category.destroy" , $category->id )}} " method = "POST">
                          @csrf
                         @method('delete')
                         <button data-toggle="tooltip" title="Trash" class="btn btn-danger  btn-sm">Delete</button>
                     </form> </td>
                 <td>
                  <td>

                    <a href= "{{route("category.edit" , $category->id )}}" data-toggle="tooltip" title="Edit" class="btn btn-success  btn-sm">edit</a>

               </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>


            </div>
          </div>
        </div>


@endsection
