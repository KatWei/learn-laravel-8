<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        从零开始 <span class="text-blue-500">学习 Laravel 8 </span> 教程
    </h1>
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="搜索文章"
                    class="bg-transparent placeholder-black font-semibold text-sm"
                />
            </form>
        </div>
    </div>
</header>
