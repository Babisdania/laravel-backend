<?php
error_reporting(0);

?>
@extends('layout')

@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Employee Data</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Simple Tables</li>
</ol>
</div>
</div>
</div>
</section>
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Employee Details</h3>


<a href="{{url('/addemployee')}}"> <button type="button" class="btn btn-primary waves-effect waves-light float-right ">Add employee</button></a>

</div>





<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">S.No</th>
<th>Id</th>
<th>Name</th>
<th>emailid</th>
<th>Password</th>
<th>contact</th>
<th>Address</th>
<th style="width: 40px">Action</th>
</tr>
</thead>
<tbody>
 @foreach($employee as $employee_details)
 <tr>
    <td>{{$loop->iteration}}</td>

 <td>{{$employee_details->id}}</td>
 <td>{{$employee_details->name}}</td>
 <td>{{$employee_details->email}}</td>
 <td>{{$employee_details->password}}</td>
 <td>{{$employee_details->contact}}</td>
 <td>{{$employee_details->address}}</td>
 <td>
    <div class="btn-toolbar row-action">
        <div class="btn-group">
            <a class="btn btn-primary "href="{{URL('/editemployee/'.$employee_details->id) }}" title="Edit">EDIT</a>&nbsp;

            <a class="btn btn-danger" href="{{URL('/deleteEmployee/'.$employee_details->id) }}" onclick="return confirm ('Do you really wants to delete the record?');"title="Delete">DELETE</a>&nbsp;
           
            <a class="btn btn-warning "href="{{URL('/viewEmployee/'.$employee_details->id) }}" title="view">VIEW</a>
         </div>
<div>
</td>
            <tr>
 @endforeach
</tbody>
</table>
</div>

<div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
</ul>
</div>
</div>