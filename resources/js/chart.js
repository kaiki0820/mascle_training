import Chart from "chart.js/auto";
const canvas_w = document.getElementById("weightChart");
const canvas_b = document.getElementById("bmiChart");
const canvas_m = document.getElementById("muscleChart");
if(canvas_w != null) {
    const ctx = canvas_w.getContext("2d");
    
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: data,
            datasets: [
                {
                    label: "体重の変化",
                    data: weightdata,
                    borderColor: "rgb(75, 192, 192)",
                    backgroundColor: "rgba(75, 192, 192, 0.5)",
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    suggestedMin: 60,
                    suggestedMax: 100,
                },
            }
        }
    });
}

if(canvas_b != null) {
    const ctx = canvas_b.getContext("2d");
    
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: data_b,
            datasets: [
                {
                    label: "BMIの変化",
                    data: bmidata,
                    borderColor: "rgb(75, 192, 192)",
                    backgroundColor: "rgba(75, 192, 192, 0.5)",
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    suggestedMin: 10,
                    suggestedMax: 30,
                },
            }
        }
    });
}

if(canvas_m != null) {
    const ctx = canvas_m.getContext("2d");
    
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: data_m,
            datasets: [
                {
                    label: "筋肉量の変化",
                    data: muscledata,
                    borderColor: "rgb(75, 192, 192)",
                    backgroundColor: "rgba(75, 192, 192, 0.5)",
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    suggestedMin: 30,
                    suggestedMax: 80,
                },
            }
        }
    });
}