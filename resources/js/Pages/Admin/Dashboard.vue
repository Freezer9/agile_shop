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

        <!-- TODO: Admin dashboard (Jeki, Alif) -->
    </AdminLayout>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "./Components/AdminLayout.vue";
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<script>
import { Bar } from "vue-chartjs";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "./Components/AdminLayout.vue";
// initialize components based on data attribute selectors
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

onMounted(() => {
    initFlowbite();
});

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
                    { data: [40, 20, 12, 60, 23, 54, 32, 60, 12, 32, 44, 55] },
                ],
            },
            chartOptions: {
                responsive: true,
            },
        };
    },
};
</script>
