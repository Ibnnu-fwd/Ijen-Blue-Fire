@props(['label' => '', 'name' => ''])

<div class="form-control mb-4">

    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>

    <div class="relative">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <input datepicker name={{ $name }} type="text" {!! $attributes->merge([
            'class' =>
                'input input-bordered input-primary focus:ring-0 focus:border-green-700 block w-full pl-10 p-2.5 datepicker-input text-sm',
        ]) !!} placeholder="Select date">
    </div>

</div>
