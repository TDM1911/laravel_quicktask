<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ trans('Laravel Quicktask') }}</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ trans('Laravel Quicktask') }}
                    </a>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown mr-5">
                            <a id="managingDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ trans('language') }}
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="managingDropdown">
                                <a class="dropdown-item" href="{{ route('locale', ['en']) }}">
                                    {{ trans('english') }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('locale', ['vi']) }}">
                                    {{ trans('vietnamese') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')
        </div>
    </body>
</html>
