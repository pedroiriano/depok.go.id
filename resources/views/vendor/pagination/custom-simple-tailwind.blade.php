@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">
                <i class="uil uil-angle-left text-[20px]"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                <i class="uil uil-angle-left text-[20px]"></i>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                <i class="uil uil-angle-right text-[20px]"></i>
            </a>
        @else
            <span class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">
                <i class="uil uil-angle-right text-[20px]"></i>
            </span>
        @endif
    </nav>
@endif
