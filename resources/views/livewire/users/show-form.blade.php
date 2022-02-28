<div class="card">
    <div class="card-header">
        <i class="fa fa-th-list"></i> {{ __('详情') }}
    </div>
    <form wire:submit.prevent="save" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">{{ __('姓名') }} <span class="text-danger">*</span></label>
                <x-form.input name="name"/>
                <x-form.error key="name"/>
            </div>
            <div class="form-group">
                <label for="role">{{ __('角色') }}</label>
                <select wire:model.lazy="role_id" name="role" id="role" class="form-control">
                    <option value="">{{ __('角色') }}</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }} @if(count($role->permissions))
                                ({{ count($role->permissions) }}) @endif</option>
                    @endforeach
                </select>
            </div>
        </div>
        @can('edit_users')
            <div class="card-footer">
                <x-form.submit-and-cancel url="{{ route('users.index') }}"/>
            </div>
        @endcan
    </form>
</div>
