<div {{ $attributes->merge(['class' => "flex p-4 mb-4 text-sm rounded-lg {$getTypeClasses()}"]) }} role="alert">
    <span class="mdi mdi-information flex-shrink-0 inline w-5 h-5 me-3 mt-[2px] text-[20px]"></span>
    <span class="sr-only">{{ $type }}</span>
    <div>
        <span class="font-medium">{{ $title }}</span>
        <div @class(['overflow-y-auto scrollbar-thin', $maxHeightClass])>
            <ul class="mt-1.5 list-disc list-inside">
                @foreach($messages as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
