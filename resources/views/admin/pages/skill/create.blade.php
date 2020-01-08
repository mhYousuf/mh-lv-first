@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Skill form</h4>
                    <br>
                    <form class="" action="{{ route('admin.skill.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title" required value="{{ isset($value) ? $value->title : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Heading</label>
                                <input type="text" class="form-control" id="heading" name="heading" placeholder="heading" required value="{{ isset($value) ? $value->heading : '' }}"> 
                            </div>
                        </div>
                        <div class="row form_box">
                            <div class="form-group col-md-6">
                                <label for="">Skill</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="skill" name="skill" placeholder="skill" required value="{{ isset($value) ? $value->skill : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Skill Name</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="skill_name" name="skill_name" placeholder="skill Name" required value="{{ isset($value) ? $value->skill_name : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Language Title</label>
                                <input type="text" class="form-control" id="lg_title" name="lg_title" placeholder="Language title" required value="{{ isset($value) ? $value->lg_title : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Heading</label>
                                <input type="text" class="form-control" id="heading" name="heading" placeholder="heading" required value="{{ isset($value) ? $value->heading : '' }}"> 
                            </div>
                        </div>
                        <div class="row form_box">
                            <div class="form-group col-md-6">
                                <label for="">Language Skill</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="lg_skill" name="lg_skill" placeholder="Language skill" required value="{{ isset($value) ? $value->lg_skill : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Language Skill Name</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="lg_skill_name" name="lg_skill_name" placeholder="Language skill Name" required value="{{ isset($value) ? $value->lg_skill_name : '' }}"> 
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
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" rows="7" id="description" name="description" placeholder="description" required value="{{ isset($value) ? $value->description : '' }}">{{ isset($value) ? $value->description : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Language Description</label>
                            <textarea type="text" class="form-control" rows="7" id="lg_description" name="lg_description" placeholder="Language description" required value="{{ isset($value) ? $value->lg_description : '' }}">{{ isset($value) ? $value->lg_description : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('admin.skill') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection