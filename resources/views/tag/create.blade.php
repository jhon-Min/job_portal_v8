@extends('layouts.app')

@section('title')
    Create Tag
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add Tag</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('tag.store') }}" method="POST" id="createForm">
                        @csrf

                        <div class="mb-4">
                            <label>Tag Name*</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Tag Name">
                        </div>

                        <button class="btn btn-primary px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\StoreTagRequest', '#createForm') !!}
@endsection
