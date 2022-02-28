<x-admin-layout :title="$title" active-route="{{$activeRoute ?? ''}}">
    <x-slot name="header">
        <x-admin-content-header :title="$title" :breadcrumb="$breadcrumb"/>
    </x-slot>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-th-list"></i> {{ __('显示所有') }}
        </div>
        <div class="card-body">
            @can('create_roles')
                <x-form.btn-create url="{{ route('roles.create') }}"/>
            @endcan
            <x-datatable url="{{ route('roles.dataTable') }}" :thead="[
                __('ID'),
                __('姓名'),
                __('权限'),
                ''
            ]"/>
        </div>
    </div>
    @push('script')
        <script src="{{ asset('js/role.js') }}"></script>
    @endpush
</x-admin-layout>


