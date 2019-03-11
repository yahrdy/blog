@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Categories <span class="float-right"><a href="{{ route('category.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i></a></span>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Category name</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($categories->count()>0)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td><a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-info"><i
                                            class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{route('category.destroy',['id'=>$category->id])}}" method="POST">
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
                        <td colspan="3" class="text-center">No category</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection