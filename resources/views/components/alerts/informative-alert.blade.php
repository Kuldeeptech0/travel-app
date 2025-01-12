<div {{ $attributes->merge(['class' => "flex p-4 my-4 text-sm rounded-lg {$getTypeClasses()}"]) }} id="{{ $attributes->get('id') }}" role="alert">
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
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#{{ $attributes->get('id') }}" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
