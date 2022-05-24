
@extends('layouts.dashboard')

@section('UsersGrid')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div
                    class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                    <h4 class="mb-sm-0 font-size-18">Users Grid</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Users Grid</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">
                        Users Number
                        <span class="text-muted fw-normal ms-2">({{$usersnumber}})</span>
                    </h5>
                </div>
            </div>

            <div class="col-md-6">
                <div
                    class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('admin.UsersList') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="List"
                                    ><i class="bx bx-list-ul"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    href="{{ route('admin.UsersGrid') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Grid"
                                    ><i class="bx bx-grid-alt"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ route('user.register') }}" class="btn btn-light"
                            ><i class="bx bx-plus me-1"></i> Add New</a
                        >
                    </div>
                    <div>
                        <a href="#" class="btn btn-light"
                            ><i  class="mdi mdi-export-variant me-1"></i> Export</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
           @if (Session::get('status'))
                <div class="alert alert-success">
                     {{ Session::get('status') }}
                </div>
            @endif
        <div class="row">
           @foreach ( $users as $item )
               <div class="col-xl-3 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="dropdown text-end">
                            <a
                                class="text-muted dropdown-toggle font-size-16"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                            >
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="href="{{ route('admin.edit',$item->id) }}">Edit</a>
                                 
                                   <form action="{{ route('admin.remove',$item->id) }} " method="POST">
                                            @method('DELETE')
                                            @csrf
                                             <button class="dropdown-item" type="submit"
                                            >Remove</button>
                                        
                                    </form>
                            </div>
                        </div>

                        <div class="mx-auto mb-4">
                            <img
                                src="{{ asset('images/usersAvatar/'.$item->profile_img )}}"
                                alt=""
                                class="avatar-xl rounded-circle img-thumbnail"
                            />
                        </div>
                        <h5 class="font-size-16 mb-2">
                            <a href="#" class="text-dark">{{ $item->nomUser }}</a>
                        </h5>
                        <p class="text-muted mb-2">{{ $item->role }}</p>
                        <p class="text-muted mb-2">{{ $item->company_name }}</p>
                    </div>

                    <div class="btn-group" role="group">
                        <button
                            type="button"
                            class="btn btn-outline-light text-truncate"
                        >
                            <i class="uil uil-user me-1"></i> Profile
                        </button>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
           @endforeach
        </div>
        <!-- end row -->
         <div class="row g-0 align-items-center mb-4 ">
            <div class="col-sm-6">
                <div>
                    <p class="mb-sm-0">Showing {{ $users->count() }} to 8 of {{ $usersnumber }} entries</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-end">
                     {{$users->links()}}
                </div>
            </div>
            
        </div> 
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
