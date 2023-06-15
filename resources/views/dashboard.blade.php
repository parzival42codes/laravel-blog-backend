@extends('layouts.admin')

@section('app--container-center')
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
@endsection
