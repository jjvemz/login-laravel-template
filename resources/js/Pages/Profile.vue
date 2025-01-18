<template>
    <div>
    <div>Bienvenido {{ user.first_name }} {{ user.last_name }}</div>
    <p>Tu correo es {{ user.email }}</p>
    <p>Tu número de telefono es {{ user.phone }}</p>


    <Link href="/logout">Cerrar Sesión</Link>
  </div>
</template>

<script>
export default {
  name: "Profile",
  props: {
    user: Object,
  },
};
</script>
