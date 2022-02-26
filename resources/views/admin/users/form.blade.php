@section('title')

@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>


<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <form role="form" id="userFrom" method="POST"
        action="{{ isset($user) ? route('users.update',$user->id) : route('users.store') }}"
        enctype="multipart/form-data">
        @csrf
        @if (isset($user))
        @method('PUT')
        @endif
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD NEW User
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Name</label>
                                <input type="text" id="title" class="form-control" name="name"
                                    value="{{ $user->name ?? ''  }}">

                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Email</label>
                                <input type="email" id="title" class="form-control" name="email"
                                    value="{{ $user->email ?? ''  }}">

                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Password</label>
                                <input type="password" id="title" class="form-control" name="password">

                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" id="title" class="form-control" name="password_confirmation">

                            </div>
                        </div>

                        <div class="form-group form-float">
                        <a class="btn btn-danger m-t-15 waves-effect"
                        href="{{ isset($user)? route('admin.route'):route('users.index')}}">BACK</a>
                    <button type="submit" class="btn btn-primary">
                        @if(isset($user))
                        {{ ('Update User') }}
                        @else
                        {{ ('Create User') }}
                        @endif
                    </button>
                </div>


                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
</div>

</main>

</div>

@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/datatables-simple-demo.js"></script>
