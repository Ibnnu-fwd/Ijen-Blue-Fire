@props(['label' => '', 'name' => '', 'required' => false])

<div class="form-control">
    <label class="label" for="{{ $name }}">
        <span class="label-text">{{ $label }} {!! $required == true ? '<sup class="text-error">*</sup>' : '' !!}</span>
    </label>
    <textarea {!! $attributes->merge(['class' => "textarea textarea-bordered h-24 textarea-primary focus:ring-0 focus:border-green-700"]) !!}
    id="{{ $name }}" name="address"></textarea>
    <label class="label">
        @error($name)
            <span class="label-text-alt text-error">{{ $message }}</span>
        @enderror
    </label>
</div>
