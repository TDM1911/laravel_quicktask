@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <form id="create-form" method="post" action="{{ route('groups.tasks.store', [$group->id]) }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="pl-5 col-md-2 col-form-label text-md-left">
                    <div class="h5">
                        {{ trans('name') }}
                    </div>
                </label>
                <div class="col-md">
                    <input id="name" type="text" class="form-control @error ('name') is-invalid @enderror" name="name" autocomplete="name" autofocus>
                    @error ('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row text-center">
                <div class="col-md">
                    <button class="btn btn-primary" type="submit">
                        {{ trans('submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
