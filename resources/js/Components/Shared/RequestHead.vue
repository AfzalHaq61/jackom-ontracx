<template>
  <div>
    <div>
      <h1 class="text-[24px] font-bold">Hi {{ name }},</h1>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  name: String,
});
</script>
