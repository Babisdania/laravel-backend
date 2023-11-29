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

<div class="card card-warning">
<div class="card-header">
<h3 class="card-title">Employee Detalis</h3>
</div>


<form class="form-horizontal" method="post" action="{{URL('/goback/')}}">
    @csrf
   
<div class="form-group row">
<label for="exampleInputName" class="col-sm-2 col-form-label">EmployeeName</label>
<input type="hidden"  class="form-control" id="id" name="id" value="{{($employee->id)}}">
<div class="col-sm-10">
{{($employee->name)}}
</div>
</div>

<div class="form-group row">
<label for="exampleInputEmail1" class="col-sm-2 col-form-label">Emailid</label>
<div class="col-sm-10">
{{($employee->email)}}
</div>
</div>

<div class="form-group row">
<label for="exampleInputPassword1" class="col-sm-2 col-form-label">password</label>
<div class="col-sm-10">
{{($employee->password)}}
</div>
</div>

<div class="form-group row">
<label for="exampleInputcontact" class="col-sm-2 col-form-label">contact</label>
<div class="col-sm-10">
{{($employee->contact)}}
</div>
</div>

<div class="form-group row">
<label for="exampleInputAddress" class="col-sm-2 col-form-label">Address</label>
<div class="col-sm-10">

{{($employee->address)}}
</div>




<div class="card-footer">
   
<button type="submit" class="btn btn-success">Go Back</button>
</div>
</form>
</div>

@stop
