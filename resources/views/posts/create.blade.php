<x-app-layout>
            <div style="font-family: 'Oswald', sans-serif;" class="text-2xl mt-5 mb-5 text-center">
                <h1>New Post</h1>
            </div>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="font-family: 'Oswald', sans-serif;" class="mt-5 mb-5 text-center">
                <h2>Category</h2>
                <select name="category_id">
                    @foreach($categories as $category)
                    <option value={{$category->id}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-5 mb-5 flex justify-center">
                <input type="file" name="image_url">
            </div>
            <div style="font-family: 'Oswald', sans-serif;" class="mt-5 mb-5 text-center body">
                <h2>Post Content</h2>
                <textarea name="post[body]" placeholder="筋トレについて"></textarea>
            </div>
            <input style="font-family: 'Oswald', sans-serif;" class="bg-sky-400 text-white rounded px-4 py-2 shadow-md hover:bg-slate-800 hover:text-white hover:transition transition mt-5 mb-5 text-center" type="submit" value="Post!"/>
        </form>
        <div class="mt-5 mb-5 text-center footer">
            <a class="rounded px-5 py-3 shadow-md hover:bg-slate-800 hover:text-white hover:transition transition" href="/">戻る</a>
        </div>
</x-app-layout>