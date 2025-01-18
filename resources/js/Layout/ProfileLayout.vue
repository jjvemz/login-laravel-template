<template>
    <div class="flex flex-col min-h-screen ">
    <ProfileHeader/>


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
import ProfileHeader from '../Components/ProfileHeader.vue';
import Footer from '../Components/Footer.vue';

export default{
    name:"ProfileLayout",
    components: {
        ProfileHeader,
        Footer
  },
}
</script>
