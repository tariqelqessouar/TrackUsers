@extends('layouts.dashboard') 


@section('UsersList')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div
                    class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                    <h4 class="mb-sm-0 font-size-18">Users List</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Users List</li>
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
                        <span class="text-muted fw-normal ms-2">({{ $users->count()}})</span>
                    </h5>
                </div>
            </div>

            <div class="col-md-6">
                <div
                    class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3"
                >
                    <div>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    href="{{ route('admin.UsersList') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="List"
                                    ><i class="bx bx-list-ul"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
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
        <div class="table-responsive mb-4">
            <table
                class="table align-middle datatable dt-responsive table-check nowrap"
                style="
                    border-collapse: collapse;
                    border-spacing: 0 8px;
                    width: 100%;
                "
            >
                <thead>
                    <tr>
                        <th scope="col" style="width: 50px">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="checkAll"
                                />
                                <label
                                    class="form-check-label"
                                    for="checkAll"
                                ></label>
                            </div>
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Email</th>
                        <th  style="width: 80px; min-width: 80px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $item )
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck1"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck1"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="{{ asset('images/usersAvatar/'.$item->profile_img )}}"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">{{ $item->nomUser }}</a>
                        </td>
                        <td> {{ $item->company_name }} </td>
                        <td> {{ $item->role }}  </td>
                        <td> {{ $item->email }}</td>
                        <td>
                            <div class="dropdown">
                                <button
                                    class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i
                                        class="bx bx-dots-horizontal-rounded"
                                    ></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                     <li>
                                        <a class="dropdown-item" href="{{ route('admin.edit',$item->id) }}"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <form action="{{ route('admin.remove',$item->id) }} " method="POST">
                                            @method('DELETE')
                                            @csrf
                                             <button class="dropdown-item" type="submit"
                                            >Remove</button>
                                        
                                        </form>
                                    </li>                                  
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- end table -->
        </div>
        <!-- end table responsive -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
