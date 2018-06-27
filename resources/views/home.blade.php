{{--@extends('layouts.master')--}}
@include('inc.header')
<div class="container">
    <div class="row">
        <legend>Laravel CRUD Application</legend>
        <div class="row">
            <div>
                @if(session('info'))
                    <div class="alert alert-success">
                        {{session('info')}}
                    </div>
                @endif
            </div>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($articles) > 0)
               @foreach($articles->all() as $article)

                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td>
                            {{--<a href='{{ url("/read/{$article->id}") }}' class="label label-primary">Read </a>|--}}
                             <a href='{{ url("/update/{$article->id}") }}' ><button class="btn btn-success">Update</button> </a>|
                            <a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger">Delete </a> |
                        </td>
                    </tr>
               @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
@include('inc.footer')
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
