@push('include-scripts')
    <script src="{{ asset('/assets/js/livewire.js') }}"></script>
@endpush

@push('include-javascript-footer')
    @livewireScripts
@endpush

@push('include-style')
    @livewireStyles
@endpush