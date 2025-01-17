<template>
    <div class="flex flex-col min-h-screen">
    <Navbar/>


    <!-- Main Content -->
    <main class="flex-grow bg-gray-50">
      <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
        <slot />
      </div>
    </main>

    <Footer />
</div>
</template>

<script>
import Navbar from '../Components/Navbar.vue';
import Footer from '../Components/Footer.vue';

export default{
    name:"MainLayout",
    components: {
        Navbar,
        Footer
  },
}
</script>
