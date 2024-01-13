<x-app-layout>
    <h1>muscle diary</h1>
    
    <div>
        <h3>トレーニング記録</h3>
        <form action="/works" method="post">
            @csrf
            <div>
                <label>トレーニング内容</label>
                <select name="training[training_id]">
                    @foreach($trainings as $training)
                    <option value="{{ $training->id }}">{{ $training->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>重さ</label>
                <input type="text" name="training[weight]" placeholder="数値を入れてください">
            </div>
            <div>
                <label>回数</label>
                <input type="text" name="training[leps]" placeholder="数値を入れてください">
            </div>
            <div>
                <button type="submit">記録</button>
            </div>
        </form>
    </div>
        
    
</x-app-layout>