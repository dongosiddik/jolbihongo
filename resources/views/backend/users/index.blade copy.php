@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@include('partials.message-flash')
{{-- @include('partials.confirm') --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        @include('backend.users.create')
                        <div class="row">
                            <div class="col-sm-12 col-md-10">
                                <h3 class="card-title">Users lists</h3>

                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div id="example1_filter" class="dataTables_filter">
                                    <button type="button" style="background-color:#007bff;" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                        New user
                                    </button>
                                    {{-- <button type="button" class="btn btn-block btn-primary" style="background-color:#007bff;">Add user</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">

                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                    Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email
                                                </th>
                                                <th class="text-center">
                                                    Role</th>

                                                <th class="text-center">
                                                    Opreation(s)</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">{{ $user->name }}
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role->name }}</td>
                                                <td class="text-center">
                                                    <form id="demo-form2" method="POST" action="{{ route('users.destroy', $user->id) }}">
                                                        <a tabindex="-1" href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#user{{ $user->id }}" title="Edit user" class="btn btn-primary">
                                                            <i class="fa fa-edit"></i></a>&nbsp;&nbsp;


                                                        <button type="submit" data-toggle="modal" data-target="#myModal" title="delete user" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                        </button>
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>


                                                @include('backend.users.edit', [
                                                'user' => $user,
                                                'idModal' => 'user' . $user->id,
                                                ])
                                            </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>



</section>
@endsection