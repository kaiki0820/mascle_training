<x-app-layout>
    <div class="w-2/3 mx-auto h-auto">
        <canvas style="height: 300px;" id="bmiChart"></canvas>
    </div>
    <script>

        
        const bmi=@json($bmis);
        const bmidata=bmi.map((data)=>data.bmi);
        const bmiday=@json($days_b);
        const data_b=bmiday.map((data)=>data.created_at.slice(0,-11));
    </script>
</x-app-layout>
    