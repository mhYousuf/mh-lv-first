@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form</h4>
                    <form class="" action="{{ route('edit.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required value="{{ isset($value) ? $value->title : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="website_name" name="website_name" placeholder="Name" required value="{{ isset($value) ? $value->website_name : '' }}"> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="{{ isset($value) ? $value->email : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required value="{{ isset($value) ? $value->phone : '' }}"> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="address" required value="{{ isset($value) ? $value->address : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Website Name</label>
                                <input type="text" class="form-control" id="web_name" name="web_name" placeholder="Website Name" required value="{{ isset($value) ? $value->web_name : '' }}"> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Copy Name</label>
                                <input type="text" class="form-control" id="copy_name" name="copy_name" placeholder="Copy Name" required value="{{ isset($value) ? $value->copy_name : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Copyright Link</label>
                                <input type="link" class="form-control" id="copy_link" name="copy_link" placeholder="Copyright Link" required value="{{ isset($value) ? $value->copy_link : '' }}"> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Logo</label>
                                <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->logo : '' }}</span>
                                <input type="file" id="logo" name="logo" class="form-control" onchange="img_valid($(this));">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Footer Logo</label>
                                <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->footer_logo : '' }}</span>
                                <input type="file" id="footer_logo" name="footer_logo" class="form-control" onchange="img_valid($(this));">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="row form_box">
                                <div class="col-md-6 form-group">
                                    <label class="form_heading">Status</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                    <select class="form-control prompt nice_select wide" name="status" id="status" >
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Copyright Year</label>
                                    <input type="text" class="form-control" id="copy_year" name="copy_year" placeholder="Copyright Year" required value="{{ isset($value) ? $value->copy_year : '' }}"> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Footer Description</label>
                            <textarea type="text" class="form-control" rows="7" id="footer_description" name="footer_description" placeholder="Footer Description" required value="{{ isset($value) ? $value->footer_description : '' }}">{{ isset($value) ? $value->footer_description : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('basic') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection