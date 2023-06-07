@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="card-body">
                            10
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>News</h4>
                        </div>
                        <div class="card-body">
                            42
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Online Users</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('specific-js')
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('4e72a7119753e66cb9e3', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('message-channel');
        channel.bind('message-event', function(data) {
            alert(JSON.stringify(data));

            let id = JSON.stringify(data.id);
            let message = JSON.stringify(data.message);
            let username = JSON.stringify(data.username);
            let second = JSON.stringify(data.second);
            let currency = JSON.stringify(data.currency);
            let cfdId = JSON.stringify(data.cfd_wallet_id)
            let typeId = JSON.stringify(data.type_id)
            let int = parseInt(second) * 1000;

            let token = "{{ csrf_token() }}";

            $.ajax({
                method: "POST",
                url: `/play-cfd`,
                data: {
                    _token: token,
                    user_id: id,
                    cfd_id: cfdId,
                    cfd_type_id: typeId,
                    amount: message,
                }
            }).done(function(res) {
                // table.ajax.reload();
                conosle.log('aung p');
            })


            // const Toast = Swal.mixin({
            //     toast: true,
            //     position: 'top-start',
            //     showConfirmButton: false,
            //     timer: 5000,
            //     allowOutsideClick: true,
            //     timerProgressBar: true,
            //     didOpen: (toast) => {
            //         toast.addEventListener('mouseenter', Swal.stopTimer)
            //         toast.addEventListener('mouseleave', Swal.resumeTimer)
            //     }
            // })

            // Toast.fire({
            //     icon: 'info',
            //     title: username,
            //     html: `
        //     <div>
        //         <div class=" d-flex justify-content-between mb-0">
        //             <span>${currency}</span>
        //             <div>
        //                 <small class="mb-0">Amount : </small>
        //                 <p class="mb-0 d-inline">100</p>
        //             </div>
        //         </div>
        //     </div>
        //         `
            // })
        });
    </script>
@endsection
