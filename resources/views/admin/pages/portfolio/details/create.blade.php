@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Details form</h4>
                    <br>
                    <form class="" action="{{ route('details.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Category Name</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($category as $key => $v)
                                        <option value="{{ $v->id }}" {{ (isset($value) && $value->category_id == $v->id) ? 'selected' : '' }}>{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title" required value="{{ isset($value) ? $value->title : '' }}"> 
                            </div>
                        </div>
                        <div class="row form_box">
                            <div class="form-group col-md-6">
                                <label for="">post Name</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="pt_name" name="pt_name" placeholder="Post name" required value="{{ isset($value) ? $value->pt_name : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Name</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Blog Name" required value="{{ isset($value) ? $value->name : '' }}"> 
                            </div>
                        </div>
                        <div class="row form_box">
                            <div class="form-group col-md-6">
                                <label for="">Icon</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <a class="pull-right text-success" href="https://fontawesome.com/v4.7.0/icons/" target="_blank">See Icon List</a>
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="icon" required value="{{ isset($value) ? $value->icon : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Skill</label><i class="fa fa-star fill" aria-hidden="true"></i>
                                <input type="text" class="form-control" id="skill" name="skill" placeholder="skill Name" required value="{{ isset($value) ? $value->skill : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Date" required value="{{ isset($value) ? $value->date : '' }}"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Release Date</label>
                                <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Release Date" required value="{{ isset($value) ? $value->release_date : '' }}"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Image</label>
                                <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->image : '' }}</span>
                                <input type="file" id="image" name="image" class="form-control" onchange="img_valid($(this));">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Post Image</label>
                                <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->pt_image : '' }}</span>
                                <input type="file" id="pt_image" name="pt_image" class="form-control" onchange="img_valid($(this));">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
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
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Url</label>
                                <input type="url" id="url" name="url" class="form-control" placeholder="Link Url" required value="{{ isset($value) ? $value->url : '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" rows="7" id="description" name="description" placeholder="description" required value="{{ isset($value) ? $value->description : '' }}">{{ isset($value) ? $value->description : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <textarea type="text" class="form-control" rows="7" id="pt_description" name="pt_description" placeholder="Post Description" required value="{{ isset($value) ? $value->pt_description : '' }}">{{ isset($value) ? $value->pt_description : '' }}</textarea>
                        </div>


                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{ route('category.details') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection