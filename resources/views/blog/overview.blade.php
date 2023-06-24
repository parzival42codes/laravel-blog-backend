@extends('blog-backend::partials.admin')

@section('app--container-center')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">{{ __('admin.blog.list') }}</div>

                <div class="card-body">
                    <div class="packages--parzival42codes--laravel-blog-backend">
                    <div class="blog--overview">
                        <livewire:table :config="\parzival42codes\LaravelBlogBackend\App\Tables\BlogPostTable::class"/>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('layouts.partials.shared.livewire')
