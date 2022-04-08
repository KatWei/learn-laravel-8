<!doctype html>

<title>逸侨博客</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Logo" width="165" height="16">
            </a>
        </div>

        <div class="flex items-center md:mt-0 mt-8">

            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold"> 欢迎回来！ {{ auth()->user()->email }}</button>
                    </x-slot>
                    @admin
                        <x-dropdown-item href="/admin/posts">所有文章</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">添加文章</x-dropdown-item>
                    @endadmin
                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">退出</x-dropdown-item>
                    <form method="post" action="/logout" id="logout-form" class="hidden">
                        @csrf
                        <button type="submit">退出</button>
                    </form>
                </x-dropdown>

            @else
                <a href="/register" class="text-xs font-bold uppercase">注册</a>
                <a href="/login" class="ml-3 text-xs font-bold uppercase">登录</a>
            @endauth

            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                订阅或更新
            </a>
        </div>
    </nav>


    {{ $slot }}

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.png" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl mt-6">关注 Blog 更新动态</h5>
        <p class="text-sm mt-3">承诺保持收件箱清洁。没有错误。</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email" type="text" placeholder="你的邮箱地址"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        订阅
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>

<x-flash/>
</body>
