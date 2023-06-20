<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Backend</title>

    <link href="{{ mix('/vendor/blog-backend/styles/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="{{ mix('/vendor/blog-backend/js/app.js') }}"></script>

</head>

<body>
<div id="app">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 offset-xl-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">Stimme jetzt ab!</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="d-shrink-0">
                                <img src="https://via.placeholder.com/60" alt=""/>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>
                                    Spaghetti Bolognese
                                    <span class="float-end text-primary" style="cursor: pointer"
                                    ><i class="fa fa-chevron-up"></i>
                      <strong>16</strong></span
                                    >
                                </h5>
                                <div>Eine Nudelgericht mit Hackfleischsoße.</div>
                                <small class="text-muted">Eingereicht von: Italien</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
