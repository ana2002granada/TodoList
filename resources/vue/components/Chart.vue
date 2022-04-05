<template>
    <div class="mt-10" >
        <canvas id="myChart"/>
    </div>
</template>

<script setup>
    import { Chart, registerables } from 'chart.js';
    import { onMounted } from "vue";
    import axios from "axios";

    Chart.register(...registerables)

    let values = [];
    let data = [];
    let config = [];
    let myChart = {};
    const labels = ['Pending', 'In process', 'Successful'];


    const getChart = (newData) => {
        data =  {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(99,193,255)',
                    'rgb(220,226,18)',
                ],
                borderColor: 'rgb(0,0,0)',
                data: newData,
            }],
        }

        config = {
            type: 'doughnut',
            data: data,
            options: {}
        };

        myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    }
    onMounted( () => {

        axios.get('/api/todos/chart/index').then(response => {
            values = Object.values(response.data.data);
            getChart(values);
        })
        }
    )
</script>
