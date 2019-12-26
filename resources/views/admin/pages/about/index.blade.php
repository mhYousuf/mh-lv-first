@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header-right text-md-right col-md-12 col-12">
        <div class="form-group">
            <div class="dropdownx">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <i class="feather icon-settings"></i> -->
                    <i class="feather icon-plus"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" id="" href="{{ url('create/form') }}" >&nbsp; Add new</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Manage</h4>
        <div class="row">
          <div class="col-md-12 responsive">
            <table id="order-listing" class="table dataTable no-footer">
              <thead>
                <tr>
                  <th align="left">Id</th>
                  <th align="left">Name</th>
                  <th align="left">Phone</th>
                  <th align="left">Email</th>
                  <th align="left">Date Of Birth</th>
                  <th align="left">Address</th>
                  <!-- <th>Nationality</th> -->
                  <!-- <th>Description</th> -->
                  <!-- <th>Social Link</th> -->
                  <th align="left">Image</th>
                  <th align="left">Status</th>
                  <th align="center">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($about as $key => $v)
                <tr>
                  <td align="left">{{$key+1}}</td>
                  <td align="left">{{$v->name}}</td>
                  <td align="left">{{$v->phone}}</td>
                  <td align="left">{{$v->email}}</td>
                  <td align="left">{{$v->date_of_birth}}</td>
                  <td align="left">{{$v->address}}</td>
                  <!-- <td align="left">{{$v->nationality}}</td> -->
                  <!-- <td align="left">{{$v->description}}</td> -->
                  <!-- <td align="left">{{$v->socail_link}}</td> -->
                  <td align="left"> <img src="{{url('back_end/upload/about/'.$v->image)}}" style="height: 60px !important; width: 80px !important; "></td>
                  <!-- <td><img src="{{url('back_end/upload/basic/'.$v->footer_logo)}}" style="height: 60px !important; width: 80px !important; "></td> -->
                  <td align="left">
                        
                        @if($v->status == 1)
                            <span class="badge badge-pill badge-success status_1 st">Active</span>
                         
                        @else
                           <span class="badge badge-pill badge-warning status_0 st disabled">Inactive</span>
                        @endif
                                                                     
                    </td>
                 <!--  <td>
                    <label class="badge badge-danger">Pending</label>
                  </td> -->
                  <td align="center">
                    <a class="btn btn-icons btn-rounded btn-success" href="{{ url('create/form/'.$v->id) }}" id="{{ $v->id }}">
                        <i class="mdi mdi-plus"></i>
                    </a>
                    <button class="btn btn-icons btn-rounded btn-danger del_btn" data-href="{{ url('destroy/'.$v->id) }}" data-id="{{ $v->id }}" ><i class="mdi mdi-delete"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
