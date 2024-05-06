<template>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4 col-12">
                <!-- Tambahkan atribut src dengan URL gambar produk -->
                <img src="https://media.istockphoto.com/id/1337600812/id/foto/pekerja-pengendalian-hama-menyemprotkan-pestisida-di-dalam-ruangan-closeup.jpg?s=1024x1024&w=is&k=20&c=zSjrKZo3WpYhNmbclt_9NmD2MVfJlXkxVInvmSJeAi8=" alt="Product Image" class="img-fluid product-image">
            </div>

            <div class="col-md-6 col-12 pt-md-0">
                <!-- Tambahkan efek hover pada nama produk -->
                <h4 class="product-name">Product Name</h4>
                <h6 class="category font-italic">Category Name</h6>
                <h6 class="font-weight-bold">$Price</h6>
                <p class="product-description">
                    Product Description
                </p>
            </div>
        </div>
    </div>
</template>

<style>
    .category {
        font-weight: 400;
    }

    .product-name {
        font-size: 1.5rem;
        font-weight: bold;
        margin-top: 1rem;
        /* Tambahkan efek hover */
        transition: color 0.3s ease;
    }

    /* Tambahkan gaya untuk efek hover */
    .product-name:hover {
        color: #007bff; 
    }

    .product-description {
        font-size: 1rem;
        margin-top: 1rem;
    }

    .font-italic {
        font-style: italic;
    }

    .font-weight-bold {
        font-weight: bold;
    }

    /* Tambahkan efek hover pada gambar produk */
    .product-image {
        transition: transform 0.3s ease;
    }

    .product-image:hover {
        transform: scale(1.05); /* Perbesar gambar saat di-hover */
    }
</style>
