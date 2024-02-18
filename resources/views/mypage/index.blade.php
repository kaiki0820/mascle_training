<x-app-layout>
    <h1>Mypage</h1>
    <div class="w-2/5 mx-auto flex text-center justify-between">
        <a href="/mypage/weight">
        <div class="flex shadow-lg border rounded mb-3 py-3 px-3 items-center">
            
           <h1 class="text-lg">体重</h1>
           <p>{{ $health->weight ?? ''}}</p>
           <sapn>kg</sapn>
        </div>
        </a>
        <a href="/mypage/bmi">
        <div class="flex shadow-lg border rounded mb-3 py-3 px-3 items-center">
            <h1 class="text-lg">BMI</h1>
            <p>{{ $health->bmi ?? ''}}</p>
        </div>
        </a>
        <a href="/mypage/muscle">
        <div class="flex shadow-lg border rounded mb-3 py-3 px-3 items-center">
            <h1 class="text-lg">筋肉量</h1>
            <p>{{ $health->muscle ?? ''}}</p>
            <span>kg</span>
        </div>
        </a>
    </div>
    <div class=class="w-2/5 mx-auto flex text-center justify-between">
        <a style="font-family: 'Oswald', sans-serif;" class="float-right relative right-56 bg-sky-400 text-white rounded px-5 py-3 shadow-md hover:bg-slate-800 hover:text-white hover:transition transition" href="/healthes/create">データを入力</a>
        <a style="font-family: 'Oswald', sans-serif;" class="float-right relative right-56 bg-sky-400 text-white rounded px-5 py-3 shadow-md hover:bg-slate-800 hover:text-white hover:transition transition" href="/works/create"><i class="fa-solid fa-plus"></i></a>
    </div>
    <br>
    <div class="w-2/5 mx-auto">
        @foreach($works as $work)
        <div class="shadow-lg border rounded mb-3 py-3 px-3">
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
                    <h5>Weight：</h5>
                    <p>{{ $work->weight }}</p>
                    <span>kg</span>
                </div>
                <div class="flex">
                    <h5>Lep：</h5>
                    <p>{{ $work->leps }}</p>
                    <span>leps</span>
                </div>
            </a>
        </div>
        @endforeach
        <div class="mt-5 mb-5 text-center">
            <a class="rounded px-5 py-3 shadow-md hover:bg-slate-800 hover:text-white hover:transition transition" href="/">ホームに戻る</a>
        </div>
        
    </div>
</x-app-layout>