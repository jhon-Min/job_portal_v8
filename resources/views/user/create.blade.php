@extends('layouts.app')

@section('title')
    Create User
@endsection

@section('theme')
    <style>
        .select2 {
            width: 100% !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add User</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST" id="createForm">
                        @csrf

                        <div class="mb-3">
                            <label>User Name*</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Eg@Mg Mg">
                        </div>

                        <div class="mb-3">
                            <label>Email*</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="Eg@mgmg@gmail.com">
                        </div>

                        <div class="mb-3">
                            <label>Password*</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Please type password">
                        </div>

                        <div class="mb-3">
                            <label>User Role</label>
                            <select class="form-select select2" name="role">
                                <option value="1" @if (old('role') == 1) selected @endif>User</option>
                                <option value="2" @if (old('role') == 2) selected @endif>Admin</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Gender</label>
                            <select class="form-select select2" name="gender">
                                <option value="male" @if (old('gender') == 'male') selected @endif>Male</option>
                                <option value="female" @if (old('gender') == 'female') selected @endif>Female</option>
                                <option value="other" @if (old('gender') == 'other') selected @endif>Other</option>
                            </select>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is_ban">
                            <label class="form-check-label" for="exampleCheck1">Is Ban the user?</label>
                        </div>

                        <button class="btn btn-primary px-3 mt-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\StoreUserRequest', '#createForm') !!}
@endsection
