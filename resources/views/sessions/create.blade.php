<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>

            <h1 class="text-center font-bold text-xl">登录</h1>
            <form action="/login" method="post" class="mt-10">
                @csrf
                <x-form.input type="email" name="email" autocomplete="username" labelName="邮箱地址"></x-form.input>
                <x-form.input type="password" name="password" labelName="密码" autocomplete="current-password"></x-form.input>
                <x-form.button>登录</x-form.button>

            </form>
            </x-panel>

        </main>
    </section>
</x-layout>
