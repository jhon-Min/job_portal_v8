@extends('layouts.app')

@section('title')
    Create Category
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" id="createForm">
                        @csrf

                        <div class="mb-4">
                            <label>Category Name*</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Category Name">
                        </div>

                        <button class="btn btn-primary px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCategoryRequest', '#createForm') !!}
@endsection
