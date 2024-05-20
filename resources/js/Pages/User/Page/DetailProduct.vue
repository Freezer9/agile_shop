<script setup>
import { router } from "@inertiajs/vue3";

defineProps({
    product: Array,
});

const addToCart = (product) => {
    router.post(route("cart.store", product), {
        onSuccess: (page) => {
            if (page.props.flash.success) {
                Swal.fire({
                    toast: true,
                    icon: "success",
                    position: "top-end",
                    showConfirmButton: false,
                    title: page.props.flash.success,
                });
            }
        },
    });
};
</script>
<template>
    <div class="flex justify-center items-center h-screen">
        <div class="p-6 w-full max-w-screen-lg">
            <div
                class="flex font-sans bg-white shadow-md rounded-lg overflow-hidden"
            >
                <!-- Bagian Kiri -->
                <div
                    class="w-2/3 border-r border-gray-200 overflow-y-auto scrollbar-hide"
                >
                    <h1 class="text-lg font-bold text-gray-800 p-4">
                        {{ product.title }}
                    </h1>
                    <div class="relative h-96">
                        <img
                            :src="product.product_images[0].image"
                            alt="Product Image"
                            class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-300 ease-in-out"
                            loading="lazy"
                        />
                        <div
                            class="absolute bottom-0 left-0 p-2 bg-gray-800 text-white text-sm"
                        >
                            {{ product.category.name }}
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="text-lg font-semibold text-gray-600 mb-2">
                            ${{ product.price }}
                        </div>
                        <p class="text-sm text-gray-700">
                            {{ product.description }}
                        </p>
                    </div>
                </div>

                <!-- Bagian Kanan -->
                <div class="w-1/3 flex flex-col">
                    <div class="relative h-56">
                        <img
                            :src="product.product_images[0].image"
                            alt="Product Image"
                            class="absolute inset-0 w-full h-full object-cover"
                            loading="lazy"
                        />
                    </div>
                    <div class="flex flex-col p-4">
                        <div class="text-lg font-semibold text-gray-600 mb-2">
                            ${{ product.price }}
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-auto h-10 px-6 font-semibold rounded-md bg-blue-500 hover:bg-blue-600 text-white transition duration-300 ease-in-out"
                                type="submit"
                                @click="addToCart(product)"
                            >
                                Add to Cart
                            </button>
                        </div>
                        <div class="border-t border-gray-200 mt-6 pt-6">
                            <div class="text-sm text-gray-700">
                                <span class="font-semibold">Developer:</span>
                                {{ product.brand.developer }}
                            </div>
                            <div class="text-sm text-gray-700 mt-2">
                                <span class="font-semibold">Publisher:</span>
                                {{ product.brand.publisher }}
                            </div>
                            <div class="text-sm text-gray-700 mt-2">
                                <span class="font-semibold">Release Date:</span>
                                {{ product.release_date }}
                            </div>
                            <div class="text-sm text-gray-700 mt-2">
                                <span class="font-semibold">Platform:</span>
                                {{ product.platform.name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Sembunyikan tombol gulir */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
