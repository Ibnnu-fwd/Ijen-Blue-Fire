<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-sm text-xs btn-primary']) }}>
    {{ $slot }}
</button>
