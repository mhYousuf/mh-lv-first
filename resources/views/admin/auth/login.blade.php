@extends('admin.auth.layouts')
@section('content')
<div class="row w-100">
    <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
            <form action="{{ route('auth.log') }}" method="post">
                @csrf
                <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Type your password" required="">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                   
                        <div class="form-group">
                            <button class="btn btn-block g-login">
                                <img class="mr-3" src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
                        </div>
                        <div class="text-block text-center my-3">
                            <span class="text-small font-weight-semibold">Not a member ?</span>
                            <a href="javascript:void(0)" class="text-black text-small">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="auth-footer">
                <li>
                    <a href="#">Conditions</a>
                </li>
                <li>
                    <a href="#">Help</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
            </ul>
            <p class="text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
        </div>
    </div>
</div>
@endsection
