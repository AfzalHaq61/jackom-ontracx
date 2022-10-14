<template>
  <div class="hidden md:flex justify-end">
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('Request/RequestServiceOne'),
      }"
    >
      <Link :href="route('request.service.one.create')">
        <h1>Towing</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('Request/RequestServiceTwo'),
      }"
    >
      <Link :href="route('request.service.two.create')">
        <h1>Repairing</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('Request/RequestServiceThree'),
      }"
    >
      <Link :href="route('request.service.three.create')">
        <h1>Spare Parts</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('Request/RequestServiceFourFive'),
      }"
    >
      <Link :href="route('request.service.four-five.create')">
        <h1>Baggage Transfer</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith('Request/RequestServiceSix'),
      }"
    >
      <Link :href="route('request.service.six.create')">
        <h1>Delivery</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold"
      :class="{
        'text-black font-bold': $page.component.startsWith('Request/RequestServiceSellCars'),
      }"
    >
      <Link :href="route('request.service.sell-car.create')">
        <h1>Selling Cars</h1>
      </Link>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const open = ref(false);
</script>