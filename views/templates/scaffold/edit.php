<x-admin.modal-layout modalSize="modal-md">
    <x-slot name="header">
        Update <?php echo $config->modelNames->human; ?>
    </x-slot>
    <x-input-error />

    {!! Form::model($resource, ['method' => 'POST', 'route' => ['<?php echo $config->modelNames->snakePlural ;?>.update', $resource->id], 'data-remote' => "true"]) !!}
        @csrf
        @method('PUT')

        @include('admin/<?php echo $config->modelNames->snakePlural ;?>/fields')
        @include('admin/share/form_actions')
    {!! Form::close() !!}

</x-admin.modal-layout>
