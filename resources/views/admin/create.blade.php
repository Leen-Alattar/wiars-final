@extends('admin.layout.master')
@section('content')
<div class="col-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Foundation</h4>
        <br>
        <p class="card-description">  </p>
        <form action="{{route("category.store")}}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
            <small class="text-danger">@error('name')
                <span>{{ $message }}</span>
            @enderror
            </small>
          </div>
          <div class="form-group">
            <label for="description">Icon</label>
            <select name="icon" class="form-control">
              <option value="fa-hospital"> Hospital </option>
              <option value="fa-university"> University </option>
              <option value="fa-school"> School</option>
              <option value="fa-plane-arrival"> Airport</option>
              <option value="fa-utensils ">Restaurant</option>
              <option value="fa-industry-alt">Factories</option> 
              <option value="fa-shopping-basket">Shops</option>
              <option value="fa-mosque "> Mosque </option>
              <option value="fa-coffee">Coffee Shop</option>
              <option value="fa-dumbbell "> Sports clubs</option>

          </select>
            <small class="text-danger">@error('icon')
                <span>{{ $message }}</span>
            @enderror
            </small>
          </div>
          <div class="form-group">
            <label for="description">color</label>
            <input type="color" class="form-control" name="color">
            <small class="text-danger">@error('color')
                <span>{{ $message }}</span>
            @enderror
            </small>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description">
            <small class="text-danger">@error('description')
                <span>{{ $message }}</span>
            @enderror
            </small>
          </div>
          <div class="form-group">
            <label for="with_doses">With Does</label>
            <select name="with_doses" class="form-control">
                <option value="1" >Yes</option>
                <option value="0">No</option>

            </select>
            <small class="text-danger">@error('with_doses')
                <span>{{ $message }}</span>
            @enderror
            </small>
          </div>

          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

@endsection
