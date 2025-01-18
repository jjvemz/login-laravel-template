<template>
    <HomeLayout>
        <div class="min-h-screen bg-gray-50 p-6 flex items-center justify-center">
            <div class="w-full max-w-3xl">
                <!-- Título principal de la aplicación -->
                <div class="mb-6">
                    <h1 class="text-4xl font-bold text-teal-600">Bienvenido a la Aplicación de Registro y Login</h1>
                </div>

                <!-- Descripción breve -->
                <div class="mb-6">
                    <p class="text-xl text-gray-700">Esta aplicación demuestra cómo funciona un sistema de autenticación
                        y
                        registro de usuarios con almacenamiento seguro en una base de datos SQLite.</p>
                </div>

                <!-- Descripción de la funcionalidad -->
                <div class="mb-6">
                    <p class="text-md text-gray-600">Puedes registrarte proporcionando tu nombre, apellido, número de
                        teléfono y correo electrónico. Posteriormente, podrás iniciar sesión de manera segura utilizando
                        tus
                        credenciales.</p>
                </div>

                <!-- Enlace a la sección de registro en un párrafo -->
                <div class="mb-6">
                    <p class="text-md text-gray-600">
                        Para comenzar, puedes <a href="/register"
                            class="text-teal-600 font-medium hover:underline">registrarte aquí</a> y unirte a nuestra
                        plataforma.
                    </p>
                </div>

                <!-- Enlace a la sección de login en un párrafo -->
                <div class="mb-6">
                    <p class="text-md text-gray-600">
                        Si ya tienes una cuenta, <a href="/login"
                            class="text-teal-600 font-medium hover:underline">inicia
                            sesión</a> para acceder a tu perfil y más funciones.
                    </p>
                </div>

                <!-- Descripción sobre la sección protegida -->
                <div class="bg-teal-100 p-6 mt-8">
                    <h2 class="text-2xl font-semibold text-teal-600">Sección protegida</h2>
                    <p class="text-md text-gray-700 mt-4">
                        Esta sección está reservada para usuarios autenticados. Una vez que inicies sesión, podrás
                        acceder a
                        tus datos personales y ver una imagen generada aleatoriamente para ti.
                    </p>
                </div>
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
