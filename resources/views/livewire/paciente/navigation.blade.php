<nav class="-mb-px flex space-x-2 mb-6" aria-label="Tabs">
    @foreach($steps as $step)
        <div class="border-transparent group cursor-pointer inline-flex items-center py-4 px-1 border-b-2 font-medium text-xs sm:text-sm
        {{ $step->isCurrent() ? 'text-indigo-500 hover:text-indigo-700 hover:border-indigo-300' : '' }}
        {{ $step->isPrevious() ? 'text-indigo-300 hover:text-indigo-600 hover:border-indigo-400' : '' }}
        {{ $step->isNext() ? 'text-gray-400 cursor-not-allowed' : '' }}"
             @if ($step->isPrevious())
                 wire:click="{{ $step->show() }}"
            @endif
        >
            <span>{{ $step->title }}</span>

        </div>
    @endforeach
</nav>
