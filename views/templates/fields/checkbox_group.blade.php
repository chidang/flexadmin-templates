<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
    @{{ html()->label('{{ $fieldTitle }}', '{{ $fieldName }}') }}
    {!! $checkboxes !!}
        </div>
    </div>
</div>
