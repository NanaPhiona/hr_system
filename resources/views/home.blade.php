@extends('layout/index')
@section('title')
   Home Page
@endsection
@section('content')
   <div class="container ml-0">
      <div class="row">
         <div class="col-md-3 employee_analytics">
            <div class="content">
               <h4 class="text-center">Total Employees</h4>
               <p><span>378</span></p>
            </div>
         </div>
         <div class="col-md-3 employee_analytics">
            <div class="content">
               <h4>New Employees</h4>
               <p><span>378</span></p>
            </div>
         </div>
         <div class="col-md-3 employee_analytics">
            <div class="content">
               <h4>Resigned Employees</h4>
            <p><span>378</span></p>
            </div>
         </div>
         <div class="col-md-3 employee_analytics" >
            <div class="content">
               <h4>Job Applicants</h4>
               <p><span>378</span></p>
            </div>
         </div>
      </div>

      <a href="{{ route('model-saving')}}" class="btn btn-primary">Model Saving</a>

   </div>
@endsection