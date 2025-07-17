<div class="my-3 p-3 sm:my-4 sm:p-4">
    <div {{ $attributes->merge(['class' => 'sm:outline-16 outline-12 rounded-lg p-2 outline-current sm:p-4 lg:p-8']) }}>
        {{ $slot }}
    </div>
</div>
