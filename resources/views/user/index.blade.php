@extends('layouts.app')

@section('title')
    User Lists
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
                    User Lists
                </div>

                <div class="card-body">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Role</th>
                                <th>Is Ban</th>
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
                ajax: '{{ route('user.queryTable') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'capital_gender',
                        name: 'capital_gender'
                    },
                    {
                        data: 'userRole',
                        name: 'userRole'
                    },
                    {
                        data: 'banInfo',
                        name: 'banInfo'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'created',
                        name: 'created'
                    },
                ]
            })

            $(document).on('click', '.del-btn', function(e, id) {
                e.preventDefault()
                var id = $(this).data(id).id;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $.ajax({
                            method: "DELETE",
                            url: `/job/${id}`
                        }).done(function(res) {
                            console.log('aung p')
                            table.ajax.reload();
                        })
                    }
                })
            })
        })
    </script>
@endsection
