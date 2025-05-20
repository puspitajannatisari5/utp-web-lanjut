@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
    @extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $courses->name }}</h5>
        <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
        <p class="card-text">Duration : {{ $courses->duration }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection    <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection