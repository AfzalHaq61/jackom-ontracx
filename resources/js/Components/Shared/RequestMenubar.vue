<template>
  <div class="hidden md:flex justify-end">
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('RequestService1'),
      }"
    >
      <Link href="/request-Service-1">
        <h1>Towing</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('RequestService2'),
      }"
    >
      <Link href="/request-Service-2">
        <h1>Repairing</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('RequestService7'),
      }"
    >
      <Link href="/request-Service-7">
        <h1>Spare Parts</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('RequestService4,5'),
      }"
    >
      <Link href="/request-Service-4,5">
        <h1>Baggage Transfer</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('RequestService6'),
      }"
    >
      <Link href="/request-Service-6">
        <h1>Delivery</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold"
      :class="{
        'text-black font-bold': $page.component.startsWith('SellCars'),
      }"
    >
      <Link href="/sell-car">
        <h1>Selling Cars</h1>
      </Link>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const open = ref(false);
</script>