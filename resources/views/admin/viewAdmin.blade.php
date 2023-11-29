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
<h3 class="card-title">Admin Detalis</h3>
</div>


<form class="form-horizontal" method="post" action="{{URL('/goback/')}}">
    @csrf
   
<div class="form-group row">

<label for="exampleInputName"  class="col-sm-2 col-form-label">AdminName</label>
<div class="col-sm-10">
<input type="hidden"  class="form-control" id="id" name="id" value="{{($admin->id)}}">

{{$admin->Name}}
</div>
</div>

<div class="form-group row">
<label for="exampleInputEmail1"  class="col-sm-2 col-form-label">Emailid</label>
<div class="col-sm-10">
{{($admin->Email)}}
</div>
</div>

<div class="form-group row">
<label for="exampleInputcontact" class="col-sm-2 col-form-label">contact</label>
<div class="col-sm-10">
{{($admin->Contact)}}
</div>
</div>

<div class="form-group row ">
<label for="exampleInputAddress" class="col-sm-2 col-form-label">Address</label>
<div class="col-sm-10">

{{($admin->Address)}}
</div>
</div>



<div class="card-footer">
   
<button type="submit" class="btn btn-success">Go Back</button>
</div>
</form>
</div>

@stop
