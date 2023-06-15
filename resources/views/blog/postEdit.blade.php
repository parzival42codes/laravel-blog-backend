@extends('layouts.admin')

@section('app--container-center')
    <div class="admin--blog--post--edit">
        {{ Aire::open()->route('blog-backend.blog::edit',['id' => $id])->bind($blogPost) }}
        {{ Aire::hidden('_id',$blogPost->id) }}
        <div class="card">
            <div class="card-header">{{ __('admin.blog.title') }}</div>
            <div class="card-body" style="display:flex;">
                <div style="flex: 5;">
                    {{ Aire::input('post_title') }}
                </div>
                <div style="flex: 1;">
                    {{ Aire::select($blogPostStatus,'post_status') }}
                </div>
                <div style="flex: 1;">
                    <a href="{{ config('app.url').'/'.$blogPost->post_path }}"
                       class="btn btn-secondary admin--blog--post--edit--button-view">{{ __('admin.comment.parentView') }}</a>
                </div>
            </div>
        </div>

        <div style="display: flex;">
            <div class="card" style="flex: 2; overflow: auto;">
                <div class="card-header">{{ __('admin.blog.content') }}</div>
                <div class="card-body">
                    {{ Aire::textArea('post_content')->id('post_content')->rows(15) }}
                </div>
            </div>
            <div class="card" style="flex: 1;">
                <div class="card-header">{{ __('admin.blog.contentParsed') }}</div>
                <div class="card-body">
                    <x-markdown>
                        {!! $blogPost->post_content !!}
                    </x-markdown>
                </div>
            </div>
        </div>

        <div class="template--form--send">{{ Aire::submit( __('template.form.send')) }}</div>

        {{ Aire::close() }}

        <div style="display: flex;">
            <div class="card" style="flex: 1;">
                <div class="card-header">{{ __('admin.blog.comment.title') }}</div>
                <div class="card-body">
                    <livewire:table :config="\parzival42codes\LaravelBlogBackend\App\Tables\BlogCommentTable::class"/>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    @push('child-scripts')
    const easyMDE = new EasyMDE({
        element: document.getElementById('post_content')
    });
    @endpush
</script>

@include('layouts.partials.shared.livewire')