<x-app-layout>
    <div class="w-2/3 mx-auto h-auto">
        <canvas style="height: 300px;" id="muscleChart"></canvas>
    </div>
    <script>
        const muscle=@json($muscles);
        const muscledata=muscle.map((data)=>data.muscle);
        const muscleday=@json($days_m);
        const data_m=muscleday.map((data)=>data.created_at.slice(0,-11));
    </script>
</x-app-layout>