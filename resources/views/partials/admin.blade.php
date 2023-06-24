@push('include-styles')
    <link href="{{ asset('/storage/styles/admin.css') }}" rel="stylesheet">
@endpush

@include('blog-backend::partials.header')

<div id="app">
    <main>
        <div id="app--header">
            <h1> <a href="{{ config('app.url') }}"> {{ config('app.name') }}</a></h1>
        </div>
        <div id="app--container">
            <div id="app--container-center">
                @yield('app--container-center')
            </div>
            <div id="app--container-right">

            </div>
        </div>
        <div id="app--footer">
        </div>
    </main>
</div>

@include('blog-backend::partials.footer')
