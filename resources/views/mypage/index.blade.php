<x-app-layout>
    <h1>マイページ</h1>
    <p>メモ：ワークアウトの記録とヘルスケアの記録管理ページ</p>
    <div class="w-1/2 mx-auto">
        @foreach($works as $work)
        <div class="border-2 border-indigo-600 mb-3 py-3">
            <a href="/works/{{ $work->id }}/show">
                <div class="flex">
                    <h5>トレーニング内容：</h5>
                    <p>{{ $work->training->name }}</p>
                </div>
                 <div class="flex">
                    <h5>記録日時：</h5>
                    <p>{{ $work->created_at }}</p>
                </div>
                <div class="flex">
                    <h5>重さ：</h5>
                    <p>{{ $work->weight }}</p>
                    <span>kg</span>
                </div>
                <div class="flex">
                    <h5>回数：</h5>
                    <p>{{ $work->leps }}</p>
                    <span>回</span>
                </div>
            </a>
        </div>
        @endforeach
        
        <a href="/">ホームに戻る</a>
    </div>
</x-app-layout>