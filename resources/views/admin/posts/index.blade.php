@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Trash</th>
                </thead>
                <tbody>
                @if($posts->count()>0)
                    @foreach($posts as $post)
                        <tr>
                            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-info btn-sm"><i
                                            class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{route('post.destroy',['id'=>$post->id])}}" method="POST">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">No post to display</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection