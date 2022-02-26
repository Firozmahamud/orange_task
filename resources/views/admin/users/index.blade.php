@section('title')

@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ ('All Users') }}</div>
        </div>
        <div class="page-title-actions">

            <div class="d-inline-block dropdown">
                <a href="{{ route('users.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ ('Create User') }}
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key=>$user)
                        <tr>



                        <td class="text-center text-muted">#{{ $key + 1 }}</td>

                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>


                                           <td class="text-center">
                                               @if ( $user->lock==0)
                                               <a class="btn btn-danger btn-sm" href="{{ route('block',$user->id) }}"><i
                                                class="fas fa-edit"></i>
                                            <span>Block</span>
                                               @else

                                               <a class="btn btn-success btn-sm" href="{{ route('active',$user->id) }}"><i
                                                class="fas fa-edit"></i>
                                            <span>Active</span>
                                        </a>



                                               @endif

                                                   </td>



                        <td class="text-center">

                            <a class="btn btn-info btn-sm" href="{{ route('users.edit',$user->id) }}"><i
                                    class="fas fa-edit"></i>
                                <span>Edit</span>
                            </a>
                        </td>

                            <td class="text-center">

                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger waves-effect" type="submit" >
                                    <i class="material-icons">delete</i>
                                </button>
                            </form>
                        </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</main>

</div>

@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/datatables-simple-demo.js"></script>
