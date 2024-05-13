<template>
  <div class="card-container">
    <div class="card" :style="{ backgroundImage: `url(${game.image})` }">
      <div class="card-info">
        <div class="game-title-container">
          <h2>{{ game.name }}</h2>
          <div class="rating">
            <span v-for="i in game.rating" :key="i">⭐</span>
          </div>
        </div>
        <p class="price">{{ game.price }}</p>
        <p class="description">{{ game.description }}</p>
        <div class="button-group">
          <button class="btn btn-primary">Buy now</button>
          <button class="btn btn-outline-secondary">Add to cart</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const game = ref({
  image: '/path/to/game/image.jpg',
  name: 'Game Name',
  price: '$50.00',
  rating: 4,
  description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor odio id magna cursus, a porttitor magna sollicitudin. Phasellus nec malesuada eros.'
});
</script>

<style scoped>
.card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
}

.card {
  width: 350px;
  height: 450px;
  background-position: center;
  background-size: cover;
  border-radius: 10px;
  box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.1);
  transition: background-image 0.3s ease-in-out;
  cursor: pointer;
}

.card:hover {
  background-image: filter brightness(1.1)
}

.card-info {
  position: absolute;
  bottom: 20px;
  left: 20px;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border-radius: 10px;
  width: calc(100% - 40px);
}

.game-title-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.game-title-container h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.rating {
  display: inline-block;
  margin-bottom: 10px;
}

.rating span {
  font-size: 18px;
  margin-right: 5px;
}

.price {
  font-weight: bold;
  margin-bottom: 10px;
}

.description {
  line-height: 1.6;
  margin-bottom: 20px;
}

.button-group {
  display: flex;
  justify-content: space-between;
}

.btn {
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #3498db;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-outline-secondary {
  background-color: #FFC107; /* Change background color */
  color: #333; /* Change text color */
  border: 1px solid #333;
}
</style>
