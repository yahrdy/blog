@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($users->count()>0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="60px"
                                     height="60px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not.admin',['id'=>$user->id]) }}"
                                       class="btn btn-sm btn-outline-danger">Remove admin</a>
                                @else
                                    <a href="{{ route('user.admin',['id'=>$user->id]) }}"
                                       class="btn btn-sm btn-success">Make admin</a>
                                @endif
                            </td>
                            <td>
                                @if($user->id !== Auth::id())
                                    <form action="{{route('user.destroy',['id'=>$user->id])}}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">No users</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection