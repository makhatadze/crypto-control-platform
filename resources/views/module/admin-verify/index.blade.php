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
                <h2 class="header-title">Verification Requests</h2>
                <div class="table-responsive">
                    <table id="example" class="display table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <form method="GET" action="{{route('adminVerifyIndex')}}">
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
                                    <select onchange="this.form.submit()" name="address" class="form-control input">
                                        <option {{Request::get('address') === '' ? 'selected' : ''}} value="">All
                                        </option>
                                        <option {{Request::get('address') === '1' ? 'selected' : ''}} value="1"> Utility bill (gas, water, electric)
                                        </option>
                                        <option {{Request::get('address') === '2' ? 'selected' : ''}} value="2"> Telecom bill (internet or landline)
                                        </option>
                                        <option {{Request::get('address') === '3' ? 'selected' : ''}} value="3">Paper bank or credit card statement
                                        </option>
                                        <option {{Request::get('address') === '4' ? 'selected' : ''}} value="4"> Original electronic bank or credit card statement in PDF
                                        </option>
                                    </select>
                                </th>

                                <th>
                                    <select onchange="this.form.submit()" name="status" class="form-control input">
                                        <option {{Request::get('status') === '' ? 'selected' : ''}} value="">All
                                        </option>
                                        <option {{Request::get('status') === '1' ? 'selected' : ''}} value="1">Success
                                        </option>
                                        <option {{Request::get('status') === '0' ? 'selected' : ''}} value="0">Failed
                                        </option>
                                        <option {{Request::get('status') === '2' ? 'selected' : ''}} value="2">Pending
                                        </option>
                                    </select>
                                </th>
                                <th></th>
                            </form>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($verifications as $verification)
                            <tr>
                                <td>{{$verification->id}}</td>
                                <td>{{$verification->name}}</td>
                                <td>{{$verification->email}}</td>
                                <td>
                                    @switch($verification->address)
                                        @case(1)
                                        Utility bill (gas, water, electric)
                                        @break
                                        @case(2)
                                        Telecom bill (internet or landline)
                                        @break
                                        @case(3)
                                        Paper bank or credit card statement
                                        @break
                                        @case(4)
                                        Original electronic bank or credit card statement in PDF
                                    @endswitch</td>
                                @if($verification->status === \App\Models\Verify::VERIFY_PENDING)
                                    <td><p style="color:deepskyblue">Pending</p></td>
                                @elseif($verification->status === \App\Models\Verify::VERIFY_SUCCESS)
                                    <td><p style="color:green">Success</p></td>
                                @else
                                    <td><p style="color:red">Failed</p></td>
                                @endif
                                <td>
                                    <a class="ml-2" href="{{route('verifyEditView',$verification->id)}}">
                                        <i class="icon-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                {{ $verifications->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    <!--End row-->
@endsection
