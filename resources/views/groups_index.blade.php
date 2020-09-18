@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ trans('name') }}</th>
                    <th scope="col">{{ trans('description') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groups as $key => $group)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td><a href="{{ route('groups.tasks.index', ['group' => $group->id]) }}">{{ $group->name }}</a></td>
                        <td>{{ $group->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
