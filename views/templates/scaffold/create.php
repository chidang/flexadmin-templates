<x-admin.modal-layout modalSize="modal-md">
    <x-slot name="header">
      <?php echo 'Create New ' . $config->modelNames->human; ?>
    </x-slot>
    <x-input-error />

    {!! Form::open(['route' => '<?php echo $config->modelNames->snakePlural ;?>.store', 'method' => 'POST', 'data-remote' => 'true']) !!}
        @csrf
        @include('admin/<?php echo $config->modelNames->snakePlural ;?>/fields')
        @include('admin/share/form_actions')
    {!! Form::close() !!}

</x-admin.modal-layout>
