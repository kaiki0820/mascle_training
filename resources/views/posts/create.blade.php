<x-app-layout>
    <h1>投稿作成</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>カテゴリー</h2>
                <select name="category_id">
                    @foreach($categories as $category)
                    <option value={{$category->id}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="file" name="image_url">
            </div>
            <div class="body">
                <h2>投稿内容</h2>
                <textarea name="post[body]" placeholder="筋トレについて"></textarea>
            </div>
            <input type="submit" value="保存する"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>