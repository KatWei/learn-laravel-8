<x-layout>
    <x-setting heading="发布一篇文章">
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" labelName="标题"></x-form.input>
            <x-form.input name="slug" labelName="slug"></x-form.input>
            <x-form.input name="thumbnail" labelName="图片" type="file"></x-form.input>
            <x-form.textarea name="excerpt" labelName="摘录"></x-form.textarea>
            <x-form.textarea name="body" labelName="内容"></x-form.textarea>
            <x-form.field>
                <x-form.label name="category_id" labelName="分类"/>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category_id"/>
            </x-form.field>

            <x-form.button> 提交 </x-form.button>
        </form>

    </x-setting>

</x-layout>
