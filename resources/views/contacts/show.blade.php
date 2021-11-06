@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Detail Contacts Person</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Phone : {{ $contacts->tlp }}</p>
        <p class="card-text">Email : {{ $contacts->email }}</p>
        <p class="card-text">Company : {{ $contacts->company }}</p>
  </div>
       
    </hr>
  
  </div>
</div>