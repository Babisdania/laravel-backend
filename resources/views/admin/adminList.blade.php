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
<h1>Admin Data</h1>
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
<h3 class="card-title">Admin Details</h3>


<a href="{{url('/addadmin')}}"> <button type="button" class="btn btn-primary waves-effect waves-light float-right ">Add Admin</button></a>

</div>



`

<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">S.No</th>

<th>admin ID</th>
<th>admin Name</th>
<th>admin contact</th>
<th>admin Address</th>
<th>admin Email</th>
<th style="width: 40px">Action</th>
</tr>
</thead>
<tbody>
 @foreach($admin as $admin_details)
 <tr>
    <td>{{$loop->iteration}}</td>

    <td>{{$admin_details->id}}</td>

 <td>{{$admin_details->Name}}</td>

 <td>{{$admin_details->Contact}}</td>
 <td>{{$admin_details->Address}}</td>
 <td>{{$admin_details->Email}}</td>
 <td>
    <div class="btn-toolbar row-action">
        <div class="btn-group">
            <a class="btn btn-primary "href="{{URL('/editadmin/'.$admin_details->id)}}" title="Edit">EDIT</a>&nbsp;

           
            <a class="btn btn-danger" href="#" onclick="return confirm ('Do you really wants to delete the record?');"title="Delete">DELETE</a>&nbsp;
            <a class="btn btn-warning "href="{{URL('/viewAdmin/'.$admin_details->id)}}" title="View">VIEW</a>
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