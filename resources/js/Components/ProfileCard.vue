<template>
    <div class="font-std mb-10 w-full rounded-2xl bg-white p-10 font-normal leading-relaxed text-gray-900 shadow-xl">
      <div class="flex flex-col md:flex-row">
        <div class="md:w-1/3 text-center mb-8 md:mb-0">
          <img
            src="https://i.pravatar.cc/300"
            alt="Profile Picture"
            class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-teal-600  transition-transform duration-300 hover:scale-105 ring ring-gray-300"
          />

        </div>
        <div class="md:w-2/3 md:pl-8">
          <h1 class="text-2xl font-bold text-teal-600 mb-2">{{ firstName }} {{ lastName }}</h1>



          <h2 class="text-xl font-semibold text-teal-600 mb-4">Información del contacto</h2>
          <ul class="space-y-2 text-gray-700">
            <li class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-teal-600" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              {{ email }}
            </li>
            <li class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-teal-600" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
              </svg>
              {{ phone }}
            </li>

          </ul>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: "ProfileCard",
    props: {
      firstName: {
        type: String,
        required: true,
      },
      lastName: {
        type: String,
        required: true,
      },
      email: {
        type: String,
        required: true,
      },
      phone: {
        type: String,
        required: false,
      },
    },
  };
  </script>

  <style scoped>
  </style>
