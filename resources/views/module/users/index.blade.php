@extends('layout.left-menu')
@section('subhead')
    <title>Users</title>
@endsection

@section('wrapper')
    <!--Start row-->

    <div class="row">
        @include('layout.components.alert')
        <div class="col-md-12">
            <div class="white-box">

                <div class="p-b-10">
                    <a href="{{route('userCreate')}}" class="btn btn-success ">Add User</a>
                </div>
                <h2 class="header-title">Users</h2>
                <div class="table-responsive">
                    <table id="example" class="display table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Verify</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <form method="GET" action="{{route('userIndex')}}">
                                <th>
                                    <input onchange="this.form.submit()" value="{{Request::get('id')}}" type="text"
                                           class="form-control" placeholder="" maxlength="25" name="id">
                                </th>
                                <th>
                                    <input onchange="this.form.submit()" value="{{Request::get('name')}}" type="text"
                                           class="form-control" maxlength="25" name="name">
                                </th>
                                <th>
                                    <input onchange="this.form.submit()" value="{{Request::get('email')}}" type="email"
                                           class="form-control" maxlength="25" name="email">
                                </th>

                                <th>
                                    <select onchange="this.form.submit()" name="status" class="form-control input">
                                        <option {{Request::get('status') === '' ? 'selected' : ''}} value="">All
                                        </option>
                                        <option {{Request::get('status') === '1' ? 'selected' : ''}} value="1">Active
                                        </option>
                                        <option {{Request::get('status') === '2' ? 'selected' : ''}} value="2">Block
                                        </option>
                                        <option {{Request::get('status') === '3' ? 'selected' : ''}} value="0">Pending
                                        </option>
                                    </select>
                                </th>
                                <th>
                                    <select onchange="this.form.submit()" name="verify" class="form-control input">
                                        <option {{Request::get('verify') === '' ? 'selected' : ''}} value="">All
                                        </option>
                                        <option {{Request::get('verify') === '1' ? 'selected' : ''}} value="1">Verify
                                        </option>
                                        <option {{Request::get('verify') === '0' ? 'selected' : ''}} value="0">Not
                                            Verify
                                        </option>
                                        <option {{Request::get('verify') === '2' ? 'selected' : ''}} value="2">Pending
                                        </option>
                                    </select>
                                </th>

                                <th></th>
                            </form>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if($user->status === 0)
                                    <td>Pending</td>
                                @elseif($user->status === 2)
                                    <td>Block</td>
                                @else
                                    <td>Active</td>
                                @endif
                                @if($user->verify === 0)
                                    <td>Not Verify</td>
                                @elseif($user->verify === 2)
                                    <td>Pending</td>
                                @else
                                    <td>Verify</td>
                                @endif
                                @if($user->status===1||$user->status==2)
                                    <td>
                                        <a href="{{route('editWallet',$user->id)}}">
                                            Update Wallet
                                        </a>
                                        <a class="ml-2" href="{{route('userView',$user->id)}}">
                                            <i class="icon-eye"></i>
                                        </a>
                                    </td>
                                @else
                                    <td>
                                        <a href="{{route('setWallet',$user->id)}}">
                                            Set Wallet
                                        </a>
                                        <a class="ml-2" href="{{route('userView',$user->id)}}">
                                            <i class="icon-eye"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    <!--End row-->
@endsection
