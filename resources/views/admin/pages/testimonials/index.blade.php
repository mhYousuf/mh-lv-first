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
                    <a class="dropdown-item" id="" href="{{ url('admin/testimonial/form') }}" >&nbsp; Add new</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Testimonials Table</h4>
        <div class="row">
          <div class="col-md-12 responsive">
            <table id="order-listing" class="table dataTable no-footer">
              <thead>
                <tr>
                  <td align="left">Id</td>
                  <td align="left">Name</td>
                  <td align="left">Title</td>
                  <td align="left">Image</td>
                  <td align="left">Description</td>
                  <td align="left">Status</td>
                  <td align="center">Actions</td>
                </tr>
              </thead>
              <tbody>
                 @foreach($testimonial as $key => $v)
                <tr>
                  <td align="left">{{ $key+1 }}</td>
                  <td align="left">{{ $v->name }}</td>
                  <td align="left">{{ $v->title }}</td>
                  <td align="left"> <img src="{{url('back_end/upload/testimonial/'.$v->image)}}" style="height: 60px !important; width: 80px !important; "></td>
                  <td align="left" title="{{ $v->description }}">{!! substr(strip_tags($v->description), 0, 50) !!}...</td>
                  <td align="left">
                        
                        @if($v->status == 1)
                            <span class="badge badge-pill badge-success status_1 st">Active</span>
                         
                        @else
                           <span class="badge badge-pill badge-warning status_0 st disabled">Inactive</span>
                        @endif
                                                                     
                    </td>
                  <td align="center">
                    <a class="btn btn-icons btn-rounded btn-success" href="{{ url('admin/testimonial/form/'.$v->id) }}" id="{{ $v->id }}">
                        <i class="mdi mdi-plus"></i>
                    </a>
                    <button class="btn btn-icons btn-rounded btn-danger del_btn" data-href="{{ url('admin/testimonial/destroy/'.$v->id) }}" data-id="{{ $v->id }}" ><i class="mdi mdi-delete"></i></button>
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
