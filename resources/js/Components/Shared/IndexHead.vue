<template>
  <div
    class="
      flex
      justify-center
      md:justify-between
      py-[14px]
      md:py-[18px] md:px-[120px]
      bg-[#24C6C9]
      md:bg-white
      z-10
    "
  >
    <div class="md:flex md:items-center w-[60px]">
      <img src="/images/logo.png" alt="logo" />
    </div>
    <div class="hidden md:flex items-center font-semibold">
      <h1 class="text-[#858585] hover:text-black mr-[100px]">
        <Link href="/home">Home</Link>
      </h1>
      <h1 class="text-[#858585] hover:text-black mr-[100px]">
        <Link href="#services">Services</Link>
      </h1>
      <h1 class="text-[#24C6C9]">
        <Link :href="route('login.create')">Join</Link>
      </h1>
    </div>
  </div>
  <!-- menubar button -->
  <div
    class="md:hidden absolute cursor-pointer top-[15px] pl-[32px]"
    @click="open = !open"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="currentColor"
      class="w-6 h-6"
    >
      <path
        fill-rule="evenodd"
        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
        clip-rule="evenodd"
      />
    </svg>
  </div>
  <!-- menubar -->
  <div
    class="md:hidden bg-white font-semibold w-full absolute shadow-md py-2"
    v-if="open"
  >
    <div class="pl-[32px] py-2 hover:bg-gray-100">
      <h1 class="text-[#858585] hover:text-black">
        <Link href="/home">Home</Link>
      </h1>
    </div>
    <div class="pl-[32px] py-2 hover:bg-gray-100">
      <h1 class="text-[#858585] hover:text-black">
        <Link href="#services">Services</Link>
      </h1>
    </div>
    <div class="text-[#24C6C9] pl-[32px] py-2 hover:bg-gray-100">
      <h1 class="text-[#24C6C9]">
        <Link :href="route('login.create')">Join</Link>
      </h1>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const open = ref(false);
</script>
