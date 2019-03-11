@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Tags <span class="float-right"><a href="{{ route('tags.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i></a></span> </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Tags</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($tags->count()>0)
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->tag }}</td>
                            <td>
                                <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{route('tags.destroy',['id'=>$tag->id])}}" method="POST">
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
                        <td colspan="3" class="text-center">No tags</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection