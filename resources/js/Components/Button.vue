<template>
    <button
      :class="['px-4 py-2 rounded', buttonClass]"
      :type="type"
      @click="handleClick"
    >
      <slot />
    </button>
  </template>

  <script>
  export default {
    name: "Button",
    props: {
      type: {
        type: String,
        default: "Button",
      },
      buttonClass: {
        type: String,
        default: "bg-teal-500 text-white hover:bg-teal-600",
      },
    },
    emits: ["click"],
    methods: {
      handleClick(event) {
        this.$emit("click", event);
      },
    },
  };
  </script>

  <style scoped>
  button {
    transition: background-color 0.3s;
  }
  </style>
