@props(['label' => '', 'name' => '', 'required' => false])

<div class="form-control input-{{$name}}">
    <label class="label">
        <span class="text-xs 2xl:label-text">{{ $label }} {!! $required == true ? '<sup class="text-error">*</sup>' : '' !!}</span>
    </label>
    <input name="{{ $name }}" {!! $attributes->merge([
        'class' => 'input input-bordered
                    text-sm
                    input-primary focus:ring-0
                    focus:border-green-700',
    ]) !!} />
    <label class="label">
        @error($name)
            <span class="label-text-alt text-error">{{ $message }}</span>
        @enderror
    </label>
</div>
