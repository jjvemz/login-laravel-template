<template>
    <HomeLayout>
        <div class="h-full bg-gray-50">
            <!-- Container -->
            <div class="mx-auto">
                <div class="flex justify-center px-6 py-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div class="w-full h-auto bg-gray-400 dark:bg-gray-300 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://media.istockphoto.com/id/1437824169/photo/business-woman-hands-computer-mouse-and-keyboard-typing-email-online-internet-search-and.jpg?s=1024x1024&w=is&k=20&c=RmzAtbot6Q25BH3pStciBLG6VhnpiXIHGClsnHLmlvs=')"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white dark:bg-gray-600 p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="py-4 text-2xl text-center text-gray-500 dark:text-white">Ingreso</h3>
                            <form @submit.prevent="Login" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-700 rounded">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                        for="email">
                                        Email
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 black:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="email" v-model="email" type="email" placeholder="Email" />
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white"
                                        for="password">
                                        Contraseña
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 black:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password" v-model="password" type="password" placeholder="Contraseña" />
                                </div>
                                <Button @click="Login"> Ingresar</Button>
                                
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
import HomeLayout from '../Layout/HomeLayout.vue';
import Button from '@/Components/Button.vue';
import { useToast } from "vue-toastification";
import { router } from '@inertiajs/vue3';

export default {
  name: 'Login',
  components: {
    HomeLayout,
    Button
  },
  data: () => ({
    email: "",
    password: "",
    errors: [],
    generalError: null,
  }),
  methods: {
    Login() {
      const toast = useToast();
      this.errors = [];
      this.generalError = null;

      if (!this.email || !this.password) {
        toast.error("Por favor, completa todos los campos.");
        return;
      }

      axios
        .post("/v1/login", {
          email: this.email,
          password: this.password,
        })
        .then((res) => {
          toast.success("Inicio de sesión exitoso. Redirigiendo...");
          router.get("/profile");
        })
        .catch((err) => {
          if (err.response) {
            const status = err.response.status;
            const data = err.response.data;

            if (status === 422) {
              let formErrors = [];

              const keys = Object.keys(data.errors);
              keys.forEach((key) => {
                formErrors = formErrors.concat(data.errors[key]);
              });

              this.errors = formErrors;
              formErrors.forEach(error => toast.error(error));
            } else if (status === 500) {
              this.generalError = "Error del servidor. Por favor, intente más tarde.";
              toast.error(this.generalError);
            } else {
              this.generalError = `Error inesperado, código: ${status}`;
              toast.error(this.generalError);
            }
          } else {
            this.generalError = "Error inesperado. Por favor, intente más tarde.";
            toast.error(this.generalError);
          }
        });
    },
  },
}
</script>
