@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
                    <label for="title">Description</label>
                    <input name="title" id="title" class="form-control" placeholder="Title" type="text">{{ old('title')}}</input>
                    @if ($errors->has('title'))
                        <span class="help-block">{{$errors->first('title')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('url') ? 'has-error' : ''}}">
                    <label for="url">Description</label>
                    <input name="url" id="url" class="form-control" placeholder="URL" type="text">{{ old('url')}}</input>
                    @if ($errors->has('url'))
                        <span class="help-block">{{$errors->first('url')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Description" cols="30" rows="10">{{ old('description')}}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">{{$errors->first('description')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
