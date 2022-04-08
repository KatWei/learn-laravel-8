<x-layout>
    <x-setting :heading="'修改文章:' . $post->title">
        <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" labelName="标题" :value="old('title', $post->title)"></x-form.input>
            <x-form.input name="slug" labelName="slug" :value="old('slug', $post->slug)"></x-form.input>
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" labelName="图片" type="file" :value="old('thumbnail', $post->thumbnail)"></x-form.input>

                </div>
                <img src="{{ asset("storage/{$post->thumbnail}")  }}" alt="" class="rounded-xl ml-6" width="100">
            </div>
            <x-form.textarea name="excerpt" labelName="摘录">{{ old('excerpt',$post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body" labelName="内容">{{ old('body', $post->body) }}</x-form.textarea>
            <x-form.field>
                <x-form.label name="category_id" labelName="分类"/>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category_id"/>
            </x-form.field>

            <x-form.button> 修改 </x-form.button>
        </form>

    </x-setting>

</x-layout>
