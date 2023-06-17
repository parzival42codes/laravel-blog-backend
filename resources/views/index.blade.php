<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Blog Backend</title>

    <link href="{{ asset('/vendor/blog-backend/styles/style.css') }}" rel="stylesheet">

    <style>

    </style>

    <script>

    </script>

</head>
<body>

@verbatim
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div id="appVue">
                            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                                <welcome/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endverbatim

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>

