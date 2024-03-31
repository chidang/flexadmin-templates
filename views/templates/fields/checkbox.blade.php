<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            <div class="form-check">
                @{{ html()->hidden('{!! $fieldName !!}', 0) }}
                @{{ html()->checkbox('{!! $fieldName !!}', null, '{!! $checkboxVal !!}') }}
                @{{ html()->label('{!! $fieldTitle !!}', '{!! $fieldName !!}') }}
            </div>
        </div>
    </div>
</div>