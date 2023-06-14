@extends('layouts.app')

@section('title')
    Create Job
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
                    <h4>Add Job</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('job.store') }}" method="POST" id="createForm">
                        @csrf

                        <div class="mb-3">
                            <label>Job Name*</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Job Name">
                        </div>

                        <div class="mb-3">
                            <label>Salary*</label>
                            <input type="text" class="form-control" name="salary" value="{{ old('salary') }}"
                                placeholder="Salary">
                        </div>

                        <div class="mb-3">
                            <label>Category*</label>
                            <select class="form-select select2" name="category_id">
                                <option selected>Open this select menu</option>
                                @foreach ($categories as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label>Requirement*</label>
                            <textarea name="requirements" class="form-control" cols="30" rows="10">{{ old('requirements') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Job Description*</label>
                            <textarea name="job_desc" class="form-control" cols="30" rows="10">{{ old('job_desc') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Info</label>
                            <textarea name="info" class="form-control" cols="30" rows="10">{{ old('info') }}</textarea>
                        </div>


                        <button class="btn btn-primary px-3 mt-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\StorePostRequest', '#createForm') !!}
@endsection
