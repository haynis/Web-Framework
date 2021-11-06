@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Contact Employee Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="tlp" id="tlp" value="{{$contacts->tlp}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
        <label>Company</label></br>
        <input type="text" name="company" id="company" value="{{$contacts->company}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop