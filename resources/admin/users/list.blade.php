@extends('Admin::index')

@section('content')
    @include('Admin::alerts')

    <div>
        <h1 class="sub-header">Users</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <form action="{{ route('admin-users-list-search') }}" method="post">
                        {{ csrf_field() }}
                        <th><input type="text" name="id" class="form-control" value="{{ isset($search['id']) ? $search['id'] : "" }}"></th>
                        <th><input type="text" name="email" class="form-control" value="{{ isset($search['email']) ? $search['email'] : "" }}"></th>
                        <th><input type="text" name="login" class="form-control" value="{{ isset($search['login']) ? $search['login'] : "" }}"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <a href="{{ route('admin-users-list') }}" class="btn btn-default">Reset</a>
                            <button class="btn btn-primary" type="submit">Search</button></th>
                    </form>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Balance</th>
                    <th>Referrals Count</th>
                    <th>Confirm status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->login}}</td>
                    <td>{{$user->balance}}</td>
                    <td>{{$user->ref_count}}</td>
                    <td>{{$user->is_confirm == 0 ? "Unconfirmed" : "Confirmed"}}</td>
                    <td>
                        @if(!$user->is_confirm)
                            <a title="Confirm" href="{{route('admin-users-confirm', ['id'=>$user->id])}}"><i
                                        class="fa fa-newspaper-o"></i></a>
                        @endif
                        <a title="Edit" href="{{route('admin-users-edit', ['id'=>$user->id])}}"><i
                                    class="fa fa-edit"></i></a>
                        <a title="BAN or UNBAN"
                           href="{{route('admin-users-ban', ['id'=>$user->id,'type'=>$user->is_banned==0?1:0])}}"><i
                                    class="fa {{ $user->is_banned == 1?'fa-unlock green':'fa-lock red'}} "></i></a>
                        <a title="Delete" href="{{route('admin-users-delete', ['id'=>$user->id])}}"><i
                                    class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
@section('css')
    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }
    </style>
@stop