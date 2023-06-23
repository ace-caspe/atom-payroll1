<div class="odecci-input-group odecci-lg-input">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $fieldId }}" placeholder="{{ $label }}" value="{{ $value }}" {{ $isRequired ? "required":"" }}>
    <label class="input-label" for="{{ $name }}">{{  $label  }}</label>
</div>