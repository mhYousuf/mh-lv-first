@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider form</h4>
                    <br>
                    <form class="" action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title" required value="{{ isset($value) ? $value->title : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Sub Title</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Sub Title" required value="{{ isset($value) ? $value->sub_title : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Heading</label>
                                <input type="text" class="form-control" id="heading" name="heading" placeholder="heading" required value="{{ isset($value) ? $value->heading : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Image</label>
                                <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->image : '' }}</span>
                                <input type="file" id="image" name="image" class="form-control" onchange="img_valid($(this));">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <div class="row form_box">
                                    <div class="col-md-12 form-group">
                                        <label class="form_heading">Status</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                        <select class="form-control prompt nice_select wide" name="status" id="status" >
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('skill') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection