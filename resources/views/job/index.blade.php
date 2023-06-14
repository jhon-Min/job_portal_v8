@extends('layouts.app')

@section('title')
    Job Lists
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Job Lists
                </div>

                <div class="card-body">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Requirement</th>
                                <th>Category</th>
                                <th>Owner</th>
                                <th>Action</th>
                                <th>Created At</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                ajax: '{{ route('job.queryTable') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'salary',
                        name: 'salary'
                    },
                    {
                        data: 'requirements',
                        name: 'requirements'
                    },
                    {
                        data: 'category_id',
                        name: 'category_id'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                ]
            })
        })
    </script>
@endsection
