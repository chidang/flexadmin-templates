<x-admin.app-layout>
    <x-admin.page-header/>

    <x-admin.index-toolbar>
        <x-slot:mainactions>
            <a class="btn btn-highlight waves-effect" data-modal="true" href="{{ route('<?php echo $config->modelNames->snakePlural ;?>.create') }}">
                <i class="fal fa-plus-circle"></i>
                <span class="d-none d-md-inline">{{ _('Create New <?php echo $config->modelNames->human; ?>') }}</span>
            </a>
         </x-slot>

        <x-slot:bulkactions>
            <li><a class="dropdown-item open-bulk-action" data-modal="true" href="{{ route('resources.bulk.delete.create', ['resource_type' => '<?php echo Str::singular($config->modelNames->camelPlural);?>']) }}">{{ __('Delete') }}</a></li>
        </x-slot>
    </x-admin.index-toolbar>

    <x-flash-message/>
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @include('admin/<?php echo $config->modelNames->snakePlural ;?>/table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $collection->links('pagination::bootstrap-5') !!}
</x-admin.app-layout>
