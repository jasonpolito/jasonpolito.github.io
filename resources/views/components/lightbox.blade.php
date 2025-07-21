<div>
    <label for="{{ $id }}">
        {{ $trigger }}
    </label>
    @push('lightboxes')
        <input type="checkbox" class="absolute invisible size-0" id="{{ $id }}" />
        <div
            class="pointer-events-none invisible fixed inset-0 overflow-scroll bg-slate-950/25 py-16 [input:checked+&]:visible">
            <label for="{{ $id }}" class="pointer-events-auto pointer-cursor fill-parent"></label>
            {{ $content }}
        </div>
    @endpush
</div>
