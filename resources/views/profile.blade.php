@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (Auth::check())


        <div class="col-md-8">
            <div class="card">
                <div class="d-inline">
                    <div class="card-header">Welcome to the profile, {{Auth::user()->name}}</div>
                    <div><a href={{route('post.create')}}>Make new post</a></div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>Here some of your data:</p>
                    <ul>
                        <li>Name: {{Auth::user()->name}}</li>
                        <li>id: {{Auth::user()->id}}</li>
                        <li>Email: {{Auth::user()->email}}</li>
                        <li>Username: {{Auth::user()->username}}</li>
                    </ul>
                </div>
            </div>

            @isset($data)
            <div class="card">
                <div class="card-header">Here some information about you</div>
                <div class="card-body">
                    {{-- title --}}
                    <p>{{$data->about->title}}</p>

                    {{-- description --}}
                    <p>{{$data->about->description}}</p>

                    {{-- url to a website --}}
                    <p>{{$data->about->url}}</p>


                </div>
            </div>
            @endisset

            @endif



            @isset($data)
            <div class="card">
                <div class="card-header">Some data</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>Here some of your data of what you looking for:</p>
                    <ul>

                        <li>Name: {{$data->name}}</li>
                        <li>id: {{$data->id}}</li>
                        <li>Email: {{$data->email}}</li>
                        <li>Username: {{$data->username}}</li>
                    </ul>
                </div>
            </div>
            @endisset
        </div>
    </div>
</div>
@endsection