@extends('layouts.app')

@section('title')
    Tag Lists
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Tag Lists

                    <a href="{{ route('tag.create') }}" class="btn btn-primary">Add Tag</a>
                </div>

                <div class="card-body">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                                <th>Created_at</th>
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
                ajax: '{{ route('tag.queryTable') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'created',
                        name: 'created'
                    }
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
                            url: `/tag/${id}`
                        }).done(function(res) {
                            table.ajax.reload();
                        })
                    }
                })
            })
        })
    </script>
@endsection
