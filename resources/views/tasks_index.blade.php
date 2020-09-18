@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row m-2">
            <div class="h4 col-md-10">
                {{ $group->name }}
            </div>
            <div class="col">
                <!-- TODO: Edit Button -->
            </div>
            <div class="col">
                <!-- TODO: Delete Button -->
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
                            <!-- TODO: Edit Button -->
                        </div>
                        <div class="col">
                            <!-- TODO: Delete Button -->
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
