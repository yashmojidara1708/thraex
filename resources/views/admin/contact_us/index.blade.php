@extends('admin.layouts.index')
@section('admin-title', 'Contact_Us')
@section('page-main-title', 'Contact_Us')
@section('page-sub-title', 'Contact_Us')

@section('admin-content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card p-2">
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table contact_usTabl" id="contact_usTable">
                                <thead class="table-light">
                                    <tr class="text-nowrap">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
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
@endsection


@section('admin-footer')
    <script src="{{ asset('assets/admin/js/contactus.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
@endsection
