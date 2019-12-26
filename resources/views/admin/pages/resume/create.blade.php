@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Resume form</h4>
                    <br>
                    <form class="" action="{{ route('resume.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Experience Name</label>
                                <input type="text" class="form-control" id="ex_name" name="ex_name" placeholder="Name" required value="{{ isset($value) ? $value->ex_name : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Experience Title</label>
                                <input type="text" class="form-control" id="ex_title" name="ex_title" placeholder="ex_title" required value="{{ isset($value) ? $value->ex_title : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Experience Icon</label>
                                 <a class="pull-right text-success" href="https://fontawesome.com/v4.7.0/icons/" target="_blank">See Icon List</a>
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon" required value="{{ isset($value) ? $value->icon : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Experience Date</label>
                                <input type="text" class="form-control" id="ex_date" name="ex_date" placeholder="Date" required value="{{ isset($value) ? $value->ex_date : '' }}"> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Education Name</label>
                                <input type="text" class="form-control" id="ed_name" name="ed_name" placeholder="Name" required value="{{ isset($value) ? $value->ed_name : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Education Title</label>
                                <input type="text" class="form-control" id="ed_title" name="ed_title" placeholder="ed_title" required value="{{ isset($value) ? $value->ed_title : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Education Icon</label>
                                 <a class="pull-right text-success" href="https://fontawesome.com/v4.7.0/icons/" target="_blank">See Icon List</a>
                                <input type="text" class="form-control" id="ed_icon" name="ed_icon" placeholder="Icon" required value="{{ isset($value) ? $value->ed_icon : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Education Date</label>
                                <input type="text" class="form-control" id="ed_date" name="ed_date" placeholder="ed_date" required value="{{ isset($value) ? $value->ed_date : '' }}"> 
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

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail3">Education Description</label>
                                <textarea type="text" class="form-control" id="ed_description" name="ed_description" rows="7" placeholder="Education Description" required value="{{ isset($value) ? $value->ed_description : '' }}">{{ isset($value) ? $value->ed_description : '' }}</textarea> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail3">Experience Description</label>
                                <textarea type="text" class="form-control" id="ex_description" name="ex_description" rows="7" placeholder="Experience Description" required value="{{ isset($value) ? $value->ex_description : '' }}">{{ isset($value) ? $value->ex_description : '' }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('resume') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection