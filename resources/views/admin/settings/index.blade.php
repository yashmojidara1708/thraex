@extends('admin.layouts.index')
@section('admin-title', 'Settings')
@section('page-main-title', 'Settings')
@section('page-sub-title', 'Settings')

@section('admin-content')
    <div class="container mt-2">
        <div class="card shadow-lg border border-radius p-4">
            <form method="POST" enctype="multipart/form-data" id="settings_form" name="settings_form">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Company Name *</label>
                    <input type="text" name="company_name" class="form-control" value="{{ $data['company_name'] ?? '' }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Address *</label>
                    <textarea name="address" class="form-control" required>{{ $data['address'] ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">City *</label>
                    <input type="text" name="city" class="form-control" value="{{ $data['city'] ?? '' }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">State *</label>
                    <input type="text" name="state" class="form-control" value="{{ $data['state'] ?? '' }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Zipcode (6 Digits) *</label>
                    <input type="text" name="zipcode" class="form-control" value="{{ $data['zipcode'] ?? '' }}"
                        pattern="\d{6}" maxlength="6" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">GST Number</label>
                    <input type="text" name="gstnu" value="{{ $data['gstnu'] ?? '' }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Phone Number (10 Digits) *</label>
                    <input type="text" name="phone" class="form-control" value="{{ $data['phone'] ?? '' }}"
                        pattern="\d{10}" maxlength="10" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Primary Email *</label>
                    <input type="email" name="email1" value="{{ $data['email1'] ?? '' }}" class="form-control " required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Secondary Email</label>
                    <input type="email" name="email2" value="{{ $data['email2'] ?? '' }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Company Logo (Max: 5MB)</label>
                    <input type="file" name="logo" class="form-control" accept="image/*">
                    <div id="dis_logo">
                        @if (isset($data['logo']))
                            <img src="{{ asset('assets/admin/assets/build/assets/images/uploads/logo/' . $data['logo']) }}"
                                alt="Company Logo" width="100" class="img-thumbnail mt-2">
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Favicon Icon (Max: 2MB)</label>
                    <input type="file" name="favicon" class="form-control" accept="image/*">
                    <div id="dis_favicon">
                        @if(!empty($data['favicon']))
                        <img src="{{ asset('assets/admin/assets/build/assets/images/uploads/icons/' . $data['favicon']) }}" alt="Favicon Icon" width="50" class="img-thumbnail mt-2">
                    @endif
                    </div>
                </div>

                <div class="mt-3 text-start">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('admin-footer')
    <script src="{{ asset('assets/admin/js/settings.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
@endsection
