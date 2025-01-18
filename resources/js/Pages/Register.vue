<template>
    <HomeLayout>
        <div class="h-full bg-gray-100 motion-translate-x-in-100">
            <!-- Container -->
            <div class="mx-auto">
                <div class="flex justify-center px-6 py-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://media.istockphoto.com/id/1352603244/photo/shot-of-an-unrecognizable-businessman-working-on-his-laptop-in-the-office.jpg?s=2048x2048&w=is&k=20&c=ToF4ypeort99bztOWcUOCmlzyPIHkWyVJEDAypeh6vc=')">
                        </div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white dark:bg-gray-400 p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">¡Registrese!</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-500 rounded" @submit.prevent="Register">
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="first_name">Nombre</label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 black:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="first_name" v-model="first_name" type="text" placeholder="Nombre" />

                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="last_name">Apellido</label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 black:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            v-model="last_name" id="last_name" type="text" placeholder="Apellido" />

                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">Email</label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 black:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="email" v-model="email" type="email" placeholder="Email" />

                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="phone">Telefono</label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 black:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="phone" v-model="phone" type="text" placeholder="Telefono" />

                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">Contraseña</label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-black border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="password" v-model="password" type="password" placeholder="******************" />

                                    </div>
                                </div>
                                <Button type="submit">Registrar</Button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>

<script>
import axios from 'axios';
import HomeLayout from '@/Layout/HomeLayout.vue';
import Button from '@/Components/Button.vue';
import { useToast } from "vue-toastification";
import { router } from '@inertiajs/vue3';

export default {
  name: "Register",
  components: {
    HomeLayout,
    Button,
  },
  data() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      phone: "",
      password: "",
      errors: {},
    };
  },
  methods: {
    async Register() {
      const toast = useToast();

      this.errors = {};

      if (!this.first_name || !this.last_name || !this.email || !this.phone || !this.password) {
        toast.error("Todos los campos son requeridos.");
        return;
      }

      try {
        const res = await axios.post("/v1/register", {
          first_name: this.first_name,
          last_name: this.last_name,
          email: this.email,
          phone: this.phone,
          password: this.password,
        });
        toast.success("¡Registro exitoso!");
        router.visit("/login");
      } catch (error) {
        if (error.response && error.response.data.errors) {

            this.errors = error.response.data.errors;

          for (const [field, messages] of Object.entries(this.errors)) {
            messages.forEach((msg) => toast.error(msg));
          }
        } else {
          toast.error("Ocurrió un error al registrar. Intente de nuevo más tarde.");
        }
      }
    },
  },
};
</script>
