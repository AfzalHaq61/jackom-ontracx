<template>
  <div class="hidden md:flex justify-end">
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith(
          'User/Request/RequestServiceOne'
        ),
      }"
    >
      <Link :href="route('user.request-service.one.create')">
        <h1>Towing</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith(
          'User/Request/RequestServiceTwo'
        ),
      }"
    >
      <Link :href="route('user.request-service.two.create')">
        <h1>Repairing</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith(
          'User/Request/RequestServiceThree'
        ),
      }"
    >
      <Link :href="route('user.request-service.three.create')">
        <h1>Spare Parts</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith(
          'User/Request/RequestServiceFourFive'
        ),
      }"
    >
      <Link :href="route('user.request-service.four-five.create')">
        <h1>Baggage Transfer</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold mr-[50px]"
      :class="{
        'text-black font-bold': $page.component.startsWith(
          'User/Request/RequestServiceSix'
        ),
      }"
    >
      <Link :href="route('user.request-service.six.create')">
        <h1>Delivery</h1>
      </Link>
    </div>
    <div
      class="text-[#858585] hover:text-black font-semibold"
      :class="{
        'text-black font-bold': $page.component.startsWith(
          'User/Request/RequestServiceSellCars'
        ),
      }"
    >
      <Link :href="route('user.request-service.sell-car.create')">
        <h1>Selling Cars</h1>
      </Link>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const open = ref(false);
</script>