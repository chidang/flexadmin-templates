<x-admin.modal-layout modalSize="modal-md">
    <x-slot name="header">
      <?php echo 'Create New ' . $config->modelNames->human; ?>
    </x-slot>
    <x-form-errors />

    {{ html()->form('POST', route('<?php echo $config->modelNames->snakePlural ;?>.store'))->attributes(['data-remote' => 'true'])->open() }}
        @csrf
        @include('admin/<?php echo $config->modelNames->snakePlural ;?>/fields')
        @include('admin/share/form_actions')
    {{ html()->form()->close() }}

</x-admin.modal-layout>
