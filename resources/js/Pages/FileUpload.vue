<template>
  hello
  <div v-for="order in orders.data" :key="order.uuid">
    {{ order.request_details }}
    {{ order.offer_details }}
  </div>
</template>
  
<script setup>
const props = defineProps({
  orders: Object
});
</script>