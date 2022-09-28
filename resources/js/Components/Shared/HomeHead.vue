<template>
  <div class="flex justify-between">
    <div>
      <h1 class="text-[24px] font-bold">Hi Zain,</h1>
    </div>

    <div class="hidden md:inline">
      <div>
        <input
          type="search"
          placeholder="Search services"
          class="
            text-[#858585] text-[14px]
            focus:ring-[#24C6C9] focus:border-[#24C6C9]
            block
            w-full
            shadow-sm
            sm:text-sm
            border-gray-300
            rounded-md
            w-[580px]
            pl-[24px]
          "
        />
      </div>
      <div class="flex justify-end relative bottom-[26px] right-[13px]">
        <SearchIcon class="text-[#24C6C9] w-[19px] h-[19px]"></SearchIcon>
      </div>
    </div>
  </div>
</template>

<script setup>
import { SearchIcon } from "@heroicons/vue/solid";
</script>