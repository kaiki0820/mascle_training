<x-app-layout>
    <h1>musclegram</h1>
    <br>
    <a href="/posts/create">投稿作成ページへ</a>
        <div class='posts'>
            <br>
            @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
            <br>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</x-app-layout>


