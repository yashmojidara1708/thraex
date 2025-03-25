@extends('admin.layouts.index')
@section('admin-title', 'Service')
@section('page-main-title', 'Service')
@section('page-sub-title', 'Service')

@section('admin-content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="hs-dropdown-toggle ti-btn btn-wave bg-primary text-white !font-medium  waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#formdata"
                                id="addUser">Add Service <i class="ri-add-line ms-1 align-middle"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card p-2">
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table serviceTable" id="serviceTable">
                                <thead class="table-light">
                                    <tr class="text-nowrap">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.service.modal')
@endsection


@section('admin-footer')
    <script src="{{ asset('assets/admin/js/service.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
@endsection
