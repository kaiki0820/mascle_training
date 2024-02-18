<x-app-layout>
            <div class="mt-5 mb-5">
                <a style="font-family: 'Oswald', sans-serif;" class="relative left-28 bg-sky-400 text-white rounded px-5 py-3 shadow-md hover:bg-slate-800 hover:text-white hover:transition transition" href="/posts/create">Post<i class="ml-1 fa-regular fa-paper-plane"></i></a>
            </div>
            <div class='posts mx-auto w-3/5 flex justify-between flex-wrap'>
                @foreach ($posts as $post)
                <div class='shadow-lg border rounded mb-3 py-3 px-3' style="width: 30%;">
                    <div class="bg-cover bg-center w-full h-40" style="background-image: url({{$post->image_url ?? asset("/images/muscle.png")}});">
                    </div>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    @auth
                    <!-- Post.phpに作ったisLikedByメソッドをここで使用 -->
                    @if (!$post->isLikedBy(Auth::user()))
                        <span class="likes">
                            <i class="fas fa-heart like-toggle" data-post-id="{{ $post->id }}"></i>
                        <span class="like-counter">{{$post->likes_count}}</span>
                        </span><!-- /.likes -->
                    @else
                        <span class="likes">
                            <i class="fas fa-heart heart like-toggle liked" data-post-id="{{ $post->id }}"></i>
                        <span class="like-counter">{{$post->likes_count}}</span>
                        </span><!-- /.likes -->
                    @endif
                    @endauth
                </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
</x-app-layout>


