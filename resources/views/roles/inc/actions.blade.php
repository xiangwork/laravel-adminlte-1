@if ($role->id != 1 && $role->name != 'Super Admin')
    @can('edit_roles')
        <a class="btn btn-light btn-sm text-info" href="{{ route('roles.edit', $role->id) }}" title="{{ __('编辑') }}">
            <i class="fas fa-edit"></i>
        </a>
    @endcan
    @can('delete_roles')
        <a class="btn btn-light text-danger btn-sm btn-delete"
           data-alert-title="{{ __('删除提示', ['attribute' => $role->name]) }}"
           data-confirm="{{ __('确认') }}"
           data-cancel="{{ __('取消') }}"
           title="{{ __('删除') }}"
           href="{{ route('roles.destroy', $role->id) }}">
            <i class="fas fa-trash"></i>
        </a>
    @endcan
@endif

