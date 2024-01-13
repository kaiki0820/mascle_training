<x-app-layout>
    <h1>トレーニング詳細</h1>
    <form action="/works/{{ $work->id }}/edit" method="post">
        @csrf
        @method('PUT')
        <div>
            <select name="training[training_id]">
                @foreach($trainings as $training)
                    <option value={{$training->id}} @if($training->id == $work->training_id) selected @endif >{{$training->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex">
            <p>重さ：</p>
            <input type="text" name="training[weight]" value="{{ $work->weight }}">
            <span>kg</span>
        </div>
        <div class="flex">
            <p>回数：</p>
            <input type="text" name="training[leps]" value="{{ $work->leps }}">
            <span>回</span>
        </div>
        <div>
            <button type="submit">送信</button>
        </div>
    </form>
    
    <div>
        <a href="/mypage">戻る</a>
    </div>
</x-app-layout>