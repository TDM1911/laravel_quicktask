@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row m-2">
            <div class="h4 col-md-10">
                {{ $group->name }}
                <a class="btn btn-primary ml-3" href="{{ route('groups.tasks.create', [$group->id]) }}">
                    {{ trans('task.add') }}
                </a>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('groups.edit', [$group->id]) }}">
                    {{ trans('edit') }}
                </a>
            </div>
            <div class="col">
                <a class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirm">
                    {{ trans('delete') }}
                </a>
                <div class="modal fade" id="deleteConfirm" tabindex="-1" aria-labelledby="deleteConfirm" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> {{ trans('confirm') }} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-footer">
                                <form id="delete-form" method="post" action="{{ route('groups.destroy', [$group->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <div class="form-group row text-center">
                                        <div class="col-md">
                                            <button class="btn btn-danger" type="submit">
                                                {{ trans('delete') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                {{ trans('tasks') }}
            </div>
            <div class="card-body">
                @foreach ($tasks as $key => $task)
                    <div class="row">
                        <div class="col-md-10">
                            {{ $task->name }}
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{ route('tasks.edit', [$task->id]) }}">
                                {{ trans('edit') }}
                            </a>
                        </div>
                        <div class="col">
                            <a class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirm{{ $task->id }}">
                                {{ trans('delete') }}
                            </a>
                            <div class="modal fade" id="deleteConfirm{{ $task->id }}" tabindex="-1" aria-labelledby="deleteConfirm{{ $task->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"> {{ trans('confirm') }} </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form id="delete-form{{ $task->id }}" method="post" action="{{ route('tasks.destroy', [$task->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <div class="form-group row text-center">
                                                    <div class="col-md">
                                                        <button class="btn btn-danger" type="submit">
                                                            {{ trans('delete') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
