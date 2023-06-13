@extends('layouts.admin')

@section('app--container-center')
    <div class="card">
        <div class="card-header">{{ __('admin.translation-manager') }}</div>
        <div class="card-body">
            <iframe style="width: 100%; height: 80em;" src="{{ config('app.url') }}/languages"></iframe>
        </div>
    </div>
@endsection
