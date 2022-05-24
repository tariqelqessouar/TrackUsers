@extends('layouts.auth') 

@section('logintitle')
<title>Register | Track Users</title>
@endsection 

@section('registeration')
<div class="auth-full-page-content d-flex p-sm-5 p-4">
    <div class="w-100">
        <div class="d-flex flex-column h-100">
            <div class="mb-4 mb-md-5 text-center">
                <a href="{{ route('admin.home') }}" class="d-block auth-logo">
                    <img
                        src="{{ asset('assets/images/logo-sm.svg')}}"
                        alt=""
                        height="28"
                    />
                    <span class="logo-txt">Track Users</span>
                </a>
            </div>
            <div class="auth-content my-auto">
                <div class="text-center">
                    <h5 class="mb-0">Update User Account</h5>
                </div>
                <form
                    class="needs-validation mt-4 pt-2"
                    novalidate
                    action="{{ route('admin.update',$users->id) }}"
                    method="POST"
                    autocomplete="off"
                    enctype="multipart/form-data"
                >
                 @csrf
                 @method('PUT')
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                    <div class="mb-3">
                        <label for="useremail" class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="useremail"
                            value="{{$users->email}}"
                            placeholder="Enter email"
                        />
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        
                    </div>

                    <div class="mb-3" style="padding-top: 17px;">
                        <label for="username" class="form-label"
                            >Username</label
                        >
                        <input
                            type="text"
                            name="nomUser"
                            class="form-control"
                            id="username"
                            placeholder="Enter username"
                            value="{{$users->nomUser}}"
                        />
                        <span class="text-danger">@error('nomUser'){{ $message }}@enderror</span>
                        
                    </div>

                    <div class="mb-3" style="padding-top: 17px;">
                        <label for="" class="form-label"
                            >Company Name</label
                        >
                        <input
                            type="text"
                            name="company_name"
                            class="form-control"
                            id="company_name"
                            placeholder="Enter Company Name"
                            value="{{$users->company_name}}"
                        />
                        <span class="text-danger">@error('company_name'){{ $message }}@enderror</span>
                        
                    </div>
                    
                    <div class="mb-3 " style="padding-top: 17px;">
                        <label for="" class="form-label"
                            >Profile Image</label
                        >
                        <div class="btn-group">
                            
                        <input
                            type="file"
                            name="profile_img"
                            class="form-control"
                            id="profile_img"
                            placeholder="profile_img"
                            value="{{$users->profile_img}}"
                            
                        />
                          <img
                                src="{{ asset('images/usersAvatar/'.$users->profile_img )}}"
                                alt=""
                                class="avatar-sm rounded-circle me-2 "
                                style="margin-left: 50px;"
                          />
                        </div>
                        <span class="text-danger">@error('profile_img'){{ $message }}@enderror</span>
                        
                    </div>

                    <div class="mb-4">
                        
                    </div>
                    <div class="mb-3" >
                        <button
                            class="btn btn-primary w-81 waves-effect waves-light"
                            type="submit"
                        >
                            Update
                        </button>
                        <a class="btn btn-danger " href="{{url()->previous()}}">Cancel</a>
                    </div>
                    
                </form>

            </div>
            <div class="mt-4 mt-md-5 text-center">
                <p class="mb-0">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    ESTA . By EL QESSOUAR
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end auth full page content -->
@endsection
