<template>
    <ProfileLayout>
  <div class="container mx-auto px-4 py-8 motion-translate-y-in-100 motion-duration-[2s] motion-ease-spring-smooth">
    <ProfileCard
      :firstName="user.first_name"
      :lastName="user.last_name"
      :email="user.email"
      :phone="user.phone"
    />

  </div>
</ProfileLayout>
</template>

<script>
import ProfileLayout from '@/Layout/ProfileLayout.vue';
import ProfileCard from '@/Components/ProfileCard.vue';


export default {
  name: "Profile",
  components: {
    ProfileLayout,
    ProfileCard
  },
  props: {
    user: Object,
  },
};
</script>
