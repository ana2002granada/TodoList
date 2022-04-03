<script setup>
    import { Chart, registerables } from 'chart.js';
    import { onMounted } from "vue";
    import axios from "axios";
    Chart.register(...registerables)

    const labels = ['Pending', 'In process', 'Successful'];

    const data = {
        labels: labels,
        datasets: [{
                label: 'My First dataset',
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(99,193,255)',
                    'rgb(220,226,18)',
                ],
                borderColor: 'rgb(0,0,0)',
                data: [10, 20, 8],
            }],
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {}
    };

    onMounted( () => {
        axios.get('/api/todo/metric').then(data=> {
            console.log(data)
        })
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
    );

        }
    )
</script>

<template>
    <canvas id="myChart"/>
</template>
