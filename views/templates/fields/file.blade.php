<!-- {{ $fieldTitle }} Field -->
<div class="row">
    <div class="col-12">
        <div class="form-group mb-3">
            @{{ html()->label('{!! $fieldTitle !!}', '{!! $fieldName !!}') }}
            <div class="input-group">
                <div class="custom-file">
                    @{{ html()->email('{!! $fieldName !!}') }}
                    @{{ html()->label('Choose file', '{!! $fieldName !!}') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>