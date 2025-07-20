<div>
    <label for="{{ $id }}">
        {{ $trigger }}
    </label>
    @push('lightboxes')
        <input type="checkbox" class="invisible size-0" id="{{ $id }}" />
        <div class="pointer-events-none fixed inset-0 hidden overflow-scroll [input:checked+&]:block">
            <label for="{{ $id }}" class="pointer-events-auto fill-parent"></label>
            {{ $content }}
        </div>
    @endpush
</div>
