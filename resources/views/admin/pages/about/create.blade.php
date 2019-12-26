@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">About form</h4>
                    <form class="" action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name" required value="{{ isset($value) ? $value->name : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required value="{{ isset($value) ? $value->phone : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="{{ isset($value) ? $value->email : '' }}"> 
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="">Date Of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date Of Birth" required value="{{ isset($value) ? $value->date_of_birth : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="address" required value="{{ isset($value) ? $value->address : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nationality</label>
                                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality" required value="{{ isset($value) ? $value->nationality : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Image</label>
                                <span class="input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->image : '' }}</span>
                                <input type="file" id="image" name="image" class="form-control" onchange="img_valid($(this));">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Socail Link</label>
                                <input type="text" class="form-control" id="socail_link" name="socail_link" placeholder="socail_link" required value="{{ isset($value) ? $value->socail_link : '' }}"> 
                            </div>

                        </div>
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
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" rows="7" id="description" name="description" placeholder="description" required value="{{ isset($value) ? $value->description : '' }}">{{ isset($value) ? $value->description : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('about.us') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection