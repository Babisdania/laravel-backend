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
<li class="breadcrumb-item active">General Form</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Employee Detalis</h3>
</div>


<form class="form-horizontal" method="post" action="{{URL('/updateEmployee/')}}">
    @csrf
   
<div class="form-group">
<label for="exampleInputName">EmployeeName</label>
<input type="hidden"  class="form-control" id="id" name="id" value="{{($employee->id)}}">
<input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter name" value="{{($employee->name)}}">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Emailid</label>
<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="{{($employee->email)}}">
</div>
<div class="form-group">
<label for="exampleInputPassword1">password</label>
<input type="password" class="form-control" id="exampleInputPassword1"name="password" placeholder="Password" value="{{($employee->password)}}">
</div>
<div class="form-group">
<label for="exampleInputcontact">contact</label>
<input type="tel" class="form-control" id="exampleInputcontact" name="contact" placeholder="Enter phone.no" value="{{($employee->contact)}}">
</div>
<div class="form-group">
<label for="exampleInputAddress">Address</label>
<input type="text area" class="form-control" id="exampleInputAddress" name="address" placeholder="Enter Address" value="{{($employee->address)}}">
</div>



<div class="card-footer">
   
<button type="submit" class="btn btn-danger">update</button>
</div>
</form>
</div>

@stop
