<template>
    <div class="container">
        <!-- TODO: Detail Page setiap produk (Nimas, nando) -->
        <div class="row">
            <div class="col-md-1"></div>
            <!-- Display Image -->
            <div class="col-md-4 col-12">
                <img src="" alt="" class="img-fluid">
            </div>

            <!-- display product detail-->
            <div class="col-md-6 col-12 pt-md-0">
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
</style>