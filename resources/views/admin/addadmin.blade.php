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
<h3 class="card-title">Admin Detalis</h3>
</div>


<form class="form-horizontal" method="post" action="{{URL('/submitadmin/')}}">
    @csrf
    
<div class="form-group">
<label for="exampleInputName">Admin Name</label>
<input type="text" class="form-control" id="exampleInputName" name="Name" placeholder="Enter name">
</div>

<div class="form-group">
<label for="exampleInputName">Admin Email</label>
<input type="text" class="form-control" id="exampleInputName" name="Email" placeholder="Enter email">
</div>

<div class="form-group">
<label for="exampleInputcontact">Admin contact</label>
<input type="tel" class="form-control" id="exampleInputcontact" name="Contact" placeholder="Enter phone.no">
</div>
<div class="form-group">
<label for="exampleInputAddress">Admin Address</label>
<input type="text area" class="form-control" id="exampleInputAddress" name="Address" placeholder="Enter Address">
</div>



<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>


