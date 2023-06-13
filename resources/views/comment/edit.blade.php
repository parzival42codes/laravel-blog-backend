@extends('layouts.admin')

@section('app--container-center')

    <div class="blog--post--comment">

        <div class="card">
            <div class="card-header">{{ __('admin.comment.parent') }}: {{ $blogPost->post_title }}</div>
            <div class="card-body" style="display:flex;">
                {{ $blogPost->post_content }}
            </div>
            <div class="card-footer blog--comment--parent-button">
                <a href="{{ config('app.url').'/'.$blogPost->post_path }}"
                   class="btn btn-secondary blog--comment--parent-button-view">{{ __('admin.comment.parentView') }}</a>
                <a href="{{ route('admin.blog.post.edit',['id' => $blogPost->id]) }}"
                   class="btn btn-primary blog--comment--parent-button-edit">{{ __('admin.comment.parentEdit') }}</a>
            </div>
        </div>

        {{ Aire::open()->route('admin.blog.comment.edit::store')->bind($blogComment) }}
        {{ Aire::hidden('_id',$blogComment->id) }}
        <div class="card">
            <div class="card-header">{{ __('admin.comment.email') }}</div>
            <div class="card-body" style="display:flex;">
                <div style="flex: 3;">
                    {{ Aire::input('email') }}
                </div>
                <div style="flex: 1;">
                    {{ Aire::select($blogCommentStatus,'status') }}
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">{{ __('admin.comment.content') }}</div>
            <div class="card-body">
                {{ Aire::textArea('content')->rows(15) }}
            </div>
        </div>

        <div class="template--form--send">{{ Aire::submit( __('template.form.send')) }}</div>

        {{ Aire::close() }}
    </div>
@endsection
