<x-app-layout>
    <div class="w-2/3 mx-auto h-auto">
        <canvas style="height: 300px;" id="weightChart"></canvas>
    </div>
    <script>
        const weight=@json($weights);
        const weightdata=weight.map((data)=>data.weight);
        const weightday=@json($days);
        console.log(weight); 
        const data=weightday.map((data)=>data.created_at.slice(0,-11));
        console.log(data);
        
    </script>
</x-app-layout>
    