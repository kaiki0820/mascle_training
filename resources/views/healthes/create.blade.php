<x-app-layout>
    <h1>ヘルス管理</h1>
    
    <div>
        <form action="/healthes" method="post">
            @csrf
            <div>
                <label>体重</label>
                <input type="text" name="health[weight]" placeholder="数値を入れてください">
            </div>
            <div>
                <label>BMI</label>
                <input type="text" name="health[bmi]" placeholder="数値を入れてください">
            </div>
            <div>
                <label>筋肉量</label>
                <input type="text" name="health[muscle]" placeholder="数値を入れてください">
            </div>
            <div>
                <button type="submit">記録</button>
            </div>
        </form>
    </div>
        
    
</x-app-layout>