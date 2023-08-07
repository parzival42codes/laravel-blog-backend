@include('blog-backend::partials.header')

<div id="app">
    <main>
        <div id="app--container">
            <div id="app--container-left">
                {!! \parzival42codes\LaravelBlogBackend\App\Helpers\MenuHelper::get('admin') !!}
            </div>
            <div id="app--container-center">
                @yield('app--content')
            </div>
        </div>
    </main>
</div>

@include('blog-backend::partials.footer')
