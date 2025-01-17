<template>
    <HomeLayout>
        <div class="text-center">
      <h1 class="text-3xl font-bold mb-4">Bienvenido a esta aplicación, aquí tendrás una demostración del login y el registor</h1>
      <p class="text-gray-600">Puedes acceder al resto de paginas.</p>
    </div>
</HomeLayout>
</template>

<script>
import HomeLayout from '@/Layout/HomeLayout.vue';

export default {
  name: 'Welcome',
  components: {
    HomeLayout,
  },
}
</script>
