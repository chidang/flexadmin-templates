<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            @{{ html()->label('{!! $fieldTitle !!}', '{!! $fieldName !!}') }}
            @{{ html()->select('{!! $fieldName !!}', {!! $selectValues !!}, null)
                            ->class('form-control input-lg select2')
                            ->id('{!! $fieldName !!}')
                            ->attributes(['data-placeholder' => 'Select item']) }}
        </div>
    </div>
</div>
