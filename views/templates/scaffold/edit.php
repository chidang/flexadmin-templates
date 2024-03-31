<x-admin.modal-layout modalSize="modal-md">
    <x-slot name="header">
        Update <?php echo $config->modelNames->human; ?>
    </x-slot>
    <x-form-errors />

    {{ html()->modelForm($resource, 'POST', route('<?php echo $config->modelNames->snakePlural ;?>.update', $resource->id))->attributes(['data-remote' => 'true'])->open() }}
        @csrf
        @method('PUT')

        @include('admin/<?php echo $config->modelNames->snakePlural ;?>/fields')
        @include('admin/share/form_actions')
    {{ html()->form()->close() }}

</x-admin.modal-layout>
