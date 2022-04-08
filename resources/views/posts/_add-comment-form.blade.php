@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post" class="">
            @csrf
            <header class="flex items-center">
                <img
                    src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                    alt=""
                    width="60"
                    height="60"
                    class="rounded-xl">
                <h2 class="ml-4">评论</h2>
            </header>

            <div class="mt-6">
                <textarea name="body"
                          class="w-full text-sm focus:outline-none focus:ring"
                          rows="5"
                          placeholder="请输入你想要评论的内容"
                          required>
                </textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>提交</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">注册</a>或
        <a href="/login" class="hover:underline">登录</a>即可评论
    </p>
@endauth
