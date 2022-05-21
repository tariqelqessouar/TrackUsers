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
                        <span class="text-muted fw-normal ms-2">(834)</span>
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
                                    href="{{ route('UsersList') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="List"
                                    ><i class="bx bx-list-ul"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('UsersGrid') }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="Grid"
                                    ><i class="bx bx-grid-alt"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-light"
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
                        <th scope="col">Position</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tags</th>
                        <th style="width: 80px; min-width: 80px">Action</th>
                    </tr>
                </thead>
                <tbody>
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
                                src="assets/images/users/avatar-2.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Phyllis Gatlin</a>
                        </td>
                        <td>UI/UX Designer</td>
                        <td>phyllisgatlin@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="badge badge-soft-primary"
                                    >Photoshop</a
                                >
                                <a href="#" class="badge badge-soft-primary"
                                    >illustrator</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>                                  
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck2"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck2"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-1.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">James Nix</a>
                        </td>
                        <td>Frontend Developer</td>
                        <td>jamesnix@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Html</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Css</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >2 + more</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck3"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck3"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-3.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Darlene Smith</a>
                        </td>
                        <td>Backend Developer</td>
                        <td>darlenesmith@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Php</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Java</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Python</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck4"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck4"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <div
                                class="avatar-sm d-inline-block align-middle me-2"
                            >
                                <div
                                    class="avatar-title bg-soft-light text-light font-size-24 m-0 rounded-circle"
                                >
                                    <i class="bx bxs-user-circle"></i>
                                </div>
                            </div>
                            <a href="#" class="text-body">William Swift</a>
                        </td>
                        <td>Full Stack Developer</td>
                        <td>williamswift@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Ruby</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Php</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >2 + more</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck5"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck5"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <div
                                class="avatar-sm d-inline-block align-middle me-2"
                            >
                                <div
                                    class="avatar-title bg-soft-light text-light font-size-24 m-0 rounded-circle"
                                >
                                    <i class="bx bxs-user-circle"></i>
                                </div>
                            </div>
                            <a href="#" class="text-body">Kevin West</a>
                        </td>
                        <td>Frontend Developer</td>
                        <td>kevinwest@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Html</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Css</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >2 + more</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck6"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck6"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-6.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Tommy Hayes</a>
                        </td>
                        <td>UI/UX Designer</td>
                        <td>tommyhayes@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Photoshop</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >illustrator</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck7"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck7"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-8.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Diana Owens</a>
                        </td>
                        <td>Graphic Designer</td>
                        <td>dianaowens@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Photoshop</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >illustrator</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck8"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck8"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-9.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Paul Sanchez</a>
                        </td>
                        <td>Angular Developer</td>
                        <td>paulsanchez@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Php</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Javascript</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck9"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck9"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-9.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Peter Dryer</a>
                        </td>
                        <td>Web Designer</td>
                        <td>peterdryer@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Html</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Css</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >2 + more</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck10"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck10"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-4.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Gerald Moyer</a>
                        </td>
                        <td>Backend Developer</td>
                        <td>geraldmoyer@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Php</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Javascript</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="contacusercheck11"
                                />
                                <label
                                    class="form-check-label"
                                    for="contacusercheck11"
                                ></label>
                            </div>
                        </th>
                        <td>
                            <img
                                src="assets/images/users/avatar-2.jpg"
                                alt=""
                                class="avatar-sm rounded-circle me-2"
                            />
                            <a href="#" class="text-body">Gail McGuire</a>
                        </td>
                        <td>Backend Developer</td>
                        <td>gailmcGuire@gmail.com</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Php</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >Javascript</a
                                >
                                <a
                                    href="#"
                                    class="badge badge-soft-primary font-size-11"
                                    >2+ more</a
                                >
                            </div>
                        </td>
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
                                        <a class="dropdown-item" href="#"
                                            >Edit</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Remove</a
                                        >
                                    </li>
                                     
                                </ul>
                            </div>
                        </td>
                    </tr>
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
