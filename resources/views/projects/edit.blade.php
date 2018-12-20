@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
      

      <!-- Example row of columns -->
      <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px;">
      
     <form method="post" action="{{ route('companies.update', [$company->id]) }}">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="put">
        
        <div class="form-group">
          <label for="company-name">Name<span class="required">*</span></label>
          <input placeholder="Enter name"
                 id="company-name" required
                 class="form-control"
                 type="text"
                 name="name"
                 spellcheck="false"
                 value="{{ $company->name }}">
        
        </div>
        <div class="form-group">
          <label for="company-content">Description</label>
          <textarea placeholder="Enter description"
                 style="resize: vertical"
                 id="company-name" required
                 type="hidden"
                 name="description"
                 row="5"
                 spellcheck="false"
                 class="from-control autosize-target text-left">
                 {{ $company->description }}</textarea>
        
        </div>
        <div class="form-group">
         
          <input type="submit"
                 name="submit"
                 class="btn btn-primary"
                 value="Submit">
        
        </div>
     </form>
      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>-->
          <div class="sidebar-module">
            <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{ $company->id }}/show">View Company</a></li>
              <li><a href="/companies">All Company</a></li>
             <!-- <li><a href="#">Delete</a></li>
              <li><a href="#">Add new member</a></li>-->
              
            </ol>
          </div>
         <!-- <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>-->
        </div>
      

    


    
    @endsection