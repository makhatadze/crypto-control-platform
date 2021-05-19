@extends('admin.layout.left-menu')
@section('subhead')
    <title>Users</title>
@endsection

@section('wrapper')

    <!--Start row-->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h2 class="header-title">Users</h2>
                <div class="table-responsive">
                    <table id="example" class="display table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <form method="GET" action="{{route('userIndex')}}">
                                <th>
                                    <input onchange="this.form.submit()" value="{{Request::get('id')}}" type="text" class="form-control" placeholder="" maxlength="25" name="id">
                                </th>
                                <th>
                                    <input onchange="this.form.submit()" value="{{Request::get('name')}}" type="text" class="form-control" maxlength="25" name="name">
                                </th>
                                <th>
                                    <input onchange="this.form.submit()" value="{{Request::get('email')}}" type="email" class="form-control" maxlength="25" name="email">
                                </th>
                                <th>
                                        <select onchange="this.form.submit()" name="status" class="form-control input">
                                            <option {{Request::get('status') === '' ? 'selected' : ''}} value="">All</option>
                                            <option {{Request::get('status') === '1' ? 'selected' : ''}} value="1">Active</option>
                                            <option {{Request::get('status') === '2' ? 'selected' : ''}} value="2">Block</option>
                                            <option {{Request::get('status') === '3' ? 'selected' : ''}} value="3">Pending</option>
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
                                <td>Status</td>
                                <td>Actions</td>
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
