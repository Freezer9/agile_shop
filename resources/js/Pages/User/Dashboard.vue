<script setup>
import UserLayouts from "./Layouts/UserLayouts.vue";

defineProps({
    orders: Array,
});
</script>
<template>
    <UserLayouts>
        <div class="relative max-w-screen-xl py-24 mx-auto overflow-x-auto">
            <table
                v-show="order.order_items.length > 0"
                v-for="order in orders"
                :key="order.id"
                class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-5"
            >
                <thead
                    class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order ID # {{ order.id }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="item in order.order_items"
                        :key="item.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    >
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            {{ item.product.title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ item.product.brand.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ item.product.category.name }}
                        </td>
                        <td class="px-6 py-4">${{ item.product.price }}</td>
                    </tr>
                </tbody>
            </table>

            <!-- If the order item is empty  -->
            <div
                v-show="orders.length === 0"
                class="flex items-center justify-center w-full h-96"
            >
                <div class="text-center">
                    <h2
                        class="text-4xl font-semibold text-gray-800 dark:text-white"
                    >
                        No orders yet
                    </h2>
                    <p class="text-gray-500 dark:text-gray-400">
                        You haven't made any orders yet
                    </p>
                </div>
            </div>
        </div>
    </UserLayouts>
</template>
