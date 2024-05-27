<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "./Components/AdminLayout.vue";

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <AdminLayout>
        <div>
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4"
            >
                <div
                    class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                ></div>
            </div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
            >
                <div class="flex justify-center items-center h-full">
                    <Bar
                        id="my-chart-id"
                        :options="chartOptions"
                        :data="chartData"
                    />
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
            </div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
            ></div>
            <div class="grid grid-cols-2 gap-4">
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
                <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                ></div>
            </div>
        </div>
    </AdminLayout>
</template>

<script>
import { Bar } from "vue-chartjs";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

ChartJS.register(
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale
);

export default {
    name: "SalesChart",
    components: { Bar },
    props: {
        orders: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            chartData: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
                datasets: [
                    {
                        data: this.orders,
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                            "rgba(255, 205, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(201, 203, 207, 0.2)",
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                            "rgba(255, 205, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                        ],
                        borderColor: [
                            "rgb(255, 99, 132)",
                            "rgb(255, 159, 64)",
                            "rgb(255, 205, 86)",
                            "rgb(75, 192, 192)",
                            "rgb(54, 162, 235)",
                            "rgb(153, 102, 255)",
                            "rgb(201, 203, 207)",
                            "rgb(255, 99, 132)",
                            "rgb(255, 159, 64)",
                            "rgb(255, 205, 86)",
                            "rgb(75, 192, 192)",
                            "rgb(54, 162, 235)",
                        ],
                        borderWidth: 1,
                        minBarLength: 2,
                        label: "Sales Reports",
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxis: {
                        grid: {
                            display: false,
                        },
                    },
                },
            },
        };
    },
};
</script>
