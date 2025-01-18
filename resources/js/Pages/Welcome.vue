<template>
    <HomeLayout>
        <div class="flex items-center justify-center min-h-screen">
            <div class="text-center">
                <h1 class="text-3xl font-bold mb-4">Bienvenido a esta aplicación, aquí tendrás una demostración del
                    login y el registor</h1>
                <p class="text-gray-600 mt-2">Puedes acceder al resto de paginas.</p>
            </div>
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
