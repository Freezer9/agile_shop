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
import { onMounted, ref } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from "./Components/AdminLayout.vue";
import Axios from "axios"; // Impor Axios

// Inisialisasi komponen berdasarkan pemilih atribut data
onMounted(() => {
    initFlowbite();
});

const chartData = ref(null); // Buat variabel chartData sebagai data yang akan diterima

// Lakukan permintaan GET ke endpoint yang sesuai
Axios.get('/admin/dashboard')
    .then(response => {
        chartData.value = {
    labels: Object.keys(chartData.value), // Misalnya, gunakan bulan sebagai label
    datasets: [
        {
            label: 'Jumlah Transaksi',
            data: Object.values(chartData.value), // Gunakan jumlah transaksi sebagai data
        },
    ],
};

    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
</script>

<script>
import { Bar } from "vue-chartjs";
import { initFlowbite } from "flowbite";
import AdminLayout from "./Components/AdminLayout.vue";
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
} from "chart.js";

// Inisialisasi komponen berdasarkan pemilih atribut data
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
    setup() {
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
                        label: 'Jumlah Transaksi',
                        data: Object.values(chartData.value), // Menggunakan nilai dari array asosiatif
                    },
                ],
            },
        };
    },

    data() {
        return {
            chartOptions: {
                responsive: true,
            },
        };
    },
};
</script>
