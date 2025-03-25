@extends('admin.layouts.index')
@section('admin-title', 'Service')
@section('admin-header', 'Service')

@section('admin-content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formdata"
                                id="addUser">Add Service</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table id="serviceTable" class="serviceTable table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
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
