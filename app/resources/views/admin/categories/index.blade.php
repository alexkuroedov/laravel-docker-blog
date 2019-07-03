@extends('admin.layouts.app_admin')
@section('content')
 
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('title') Category list @endslot
        @slot('parent') Main @endslot
        @slot('active') Category @endslot
    @endcomponent
    
    <hr>

    <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">Create category</a>
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Public</th>
            <th class="text-right">Do</th>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td class="text-right">

                    <form onsubmit="if(confirm('Delete?')){return true}else{return false}" action="{{route('admin.category.destroy', $category)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}

                        <a class="btn btn-default" href="{{route('admin.category.edit', $category)}}">Edit</a>
                        <button class="btn" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td colsapn="3" class="text-center">
                    <h2>Data is empty</h2>
                </td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$categories}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
    
@endsection