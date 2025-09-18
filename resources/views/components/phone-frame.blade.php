<div
     class="device-frame relative mx-auto h-[600px] w-[300px] rounded-[2.5rem] border-[14px] border-gray-800 bg-gray-800 shadow-xl dark:border-gray-800">
    <div class="absolute left-1/2 top-0 h-[18px] w-[148px] -translate-x-1/2 rounded-b-[1rem] bg-gray-800"></div>
    <div class="absolute -start-[17px] top-[124px] h-[46px] w-[3px] rounded-s-lg bg-gray-800"></div>
    <div class="absolute -start-[17px] top-[178px] h-[46px] w-[3px] rounded-s-lg bg-gray-800"></div>
    <div class="absolute -end-[17px] top-[142px] h-[64px] w-[3px] rounded-e-lg bg-gray-800"></div>
    <div class="h-[572px] w-[272px] overflow-hidden rounded-[2rem] bg-white dark:bg-gray-800">
        @if ($src)
            <img src="{{ asset('assets/images/' . $src) }}" alt="{{ $src }}" />
        @else
            <div class="h-[400px] bg-slate-600"></div>
        @endif
    </div>
</div>
