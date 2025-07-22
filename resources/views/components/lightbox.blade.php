<div>
    <label for="{{ $id }}">
        {{ $trigger }}
    </label>
    @push('lightboxes')
        <input type="checkbox" class="absolute invisible size-0" id="{{ $id }}" />
        <div
            class="z-99 pointer-events-none invisible fixed inset-0 overflow-scroll bg-slate-950/25 py-16 [input:checked+&]:visible">
            {{ $content }}
        </div>
    @endpush
</div>
