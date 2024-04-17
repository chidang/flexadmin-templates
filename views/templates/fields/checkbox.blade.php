<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            <label class="custom-checkbox">
                @{{ html()->hidden('{!! $fieldName !!}', 0) }}
                @{{ html()->checkbox('{!! $fieldName !!}', null, '{!! $checkboxVal !!}') }}
                {!! $fieldTitle !!}
                <span></span>
            </label>
        </div>
    </div>
</div>