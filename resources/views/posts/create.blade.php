@extends('layouts.app')

@section('create')
    <div class="create-post">
        <div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="caption" type="caption" class="form-control @error('email') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption">

                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="media" class="col-md-4 col-form-label text-md-right">{{ __('Media') }}</label>

                        <div class="col-md-6">
                            <input id="media" type="file" class="form-control @error('media') is-invalid @enderror" name="media" value="{{ old('media') }}" required autocomplete="media">

                            @error('media')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                   

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Post') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('content')
    
@yield('create')

@endsection