@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Social Icon Form</h2>
                    <br>
                    <form class="" action="{{ route('admin.social.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="form_heading">Icon</label>
                            <a class="pull-right text-success" target="_blank" href="https://fontawesome.com/v4.7.0/icons/">See Icon List</a>
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="fa fa icon" required value="{{ isset($value) ? $value->icon : '' }}"> 
                        </div>
                        <div class="form-group col-md-12">
                            <label for="form_heading">Url</label>
                            <input type="url" class="form-control" id="url" name="url" placeholder="url" required value="{{ isset($value) ? $value->url : '' }}"> 
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
                            <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                            <button type="submit" class="btn btn-success mr-2">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                            <a href="{{route('admin.social')}}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection