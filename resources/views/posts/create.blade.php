<x-app-layout>
    <h1>投稿作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <br>
                <h2>投稿タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div>
                <h2>カテゴリー</h2>
                <select>
                    <option>テスト1</option>
                    <option>テスト2</option>
                </select>
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