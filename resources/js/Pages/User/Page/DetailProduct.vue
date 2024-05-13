<template>
  <div class="flex justify-center items-center h-screen">
    <div class="p-6 w-full max-w-screen-lg">
      <div class="flex font-sans bg-white shadow-md rounded-lg overflow-hidden">
        <!-- Bagian Kiri -->
        <div class="w-2/3 border-r border-gray-200 overflow-y-auto scrollbar-hide">
          <h1 class="text-lg font-bold text-gray-800 p-4">{{ product.nama }}</h1>
          <div class="relative h-96">
            <img :src="product.gambar" alt="Product Image" class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-300 ease-in-out" loading="lazy" />
            <div class="absolute bottom-0 left-0 p-2 bg-gray-800 text-white text-sm">{{ product.genre }}</div>
          </div>
          <div class="p-4">
            <div class="text-lg font-semibold text-gray-600 mb-2">{{ product.harga }}</div>
            <p class="text-sm text-gray-700">{{ product.deskripsi }}</p>
          </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="w-1/3 flex flex-col">
          <div class="relative h-56">
            <img :src="product.gambar" alt="Product Image" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
          </div>
          <div class="flex flex-col p-4">
            <div class="text-lg font-semibold text-gray-600 mb-2">{{ product.harga }}</div>
            <div class="flex space-x-4">
              <button class="flex-auto h-10 px-6 font-semibold rounded-md bg-blue-500 hover:bg-blue-600 text-white transition duration-300 ease-in-out" type="submit">
                Buy now
              </button>
              <button class="flex-auto h-10 px-6 font-semibold rounded-md border border-gray-300 text-gray-700 hover:border-gray-500 hover:text-gray-900 transition duration-300 ease-in-out bg-transparent" type="button" @click="addToCart">
                Add to cart
              </button>
            </div>
            <div class="border-t border-gray-200 mt-6 pt-6">
              <div class="text-sm text-gray-700"><span class="font-semibold">Developer:</span> {{ product.developer }}</div>
              <div class="text-sm text-gray-700 mt-2"><span class="font-semibold">Publisher:</span> {{ product.publisher }}</div>
              <div class="text-sm text-gray-700 mt-2"><span class="font-semibold">Release Date:</span> {{ product.releaseDate }}</div>
              <div class="text-sm text-gray-700 mt-2"><span class="font-semibold">Platform:</span> {{ product.platform }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  const product = {
    nama: "Nama Game",
    deskripsi: "Deskripsi game yang panjang. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac dolor arcu. Morbi sit amet semper risus. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum accumsan diam vitae lectus fringilla, eget sagittis purus efficitur. Integer at lectus scelerisque, vehicula urna a, sollicitudin sapien. Cras varius dui vitae libero vehicula ullamcorper. Mauris ac bibendum tortor. Nullam dignissim velit vel purus lacinia, vitae pulvinar nisl lacinia. Aliquam erat volutpat. Fusce convallis sem eget sapien placerat rutrum. Suspendisse semper eros ac nibh eleifend, eu sollicitudin ex rhoncus. Sed porta sem et lacinia fermentum.",
    developer: "Developer Game",
    publisher: "Publisher Game",
    releaseDate: "Release Date",
    platform: "Platform Game",
    genre: "Genre Game",
    harga: "$50",
    gambar: "https://cdn.akamai.steamstatic.com/steam/apps/2582650/ss_8370a4c5ac34f2d65bc5a591546b6a76d92b059c.1920x1080.jpg?t=1715400017"
  };

  const addToCart = () => {
    // Tambahkan logika untuk menambahkan produk ke keranjang belanja
  };
</script>

<style scoped>
/* Sembunyikan tombol gulir */
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
</style>
