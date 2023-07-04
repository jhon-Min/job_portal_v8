@extends('layouts.app')

@section('title')
    Edit Tag
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add Tag</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('tag.update', $tag->id) }}" method="POST" id="updateForm">
                        @csrf
                        @method('put')

                        <div class="mb-4">
                            <label>Tag Name*</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $tag->name) }}"
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateTagRequest', '#updateForm') !!}
@endsection
