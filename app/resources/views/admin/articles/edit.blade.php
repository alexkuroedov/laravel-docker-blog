@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Edit article @endslot
        @slot('parent') Main @endslot
        @slot('active') Articles @endslot
    @endcomponent

    <hr>

    <form class="form-horizontal" action="{{route('admin.category.update', $article)}}" method="post">
        <input type="hidden" name="_method" value="put">

        {{csrf_field()}}

        @include('admin.articles.partials.form')

    <input type="hidden" name="modified_by" value="{{Auty::id()}}">
    </form>

</div>

@endsection