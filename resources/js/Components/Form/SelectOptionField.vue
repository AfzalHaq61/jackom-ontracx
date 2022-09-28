<template>
  <div :class="{ errors: props.errors }" class="col-span-6 sm:col-span-3">
    <label class="block text-gray-700"
      ><slot />
      <select
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :name="props.name"
        :id="props.name"
        :multiple="multiple"
        class="
          mt-1
          focus:ring-[#24C6C9] focus:border-[#24C6C9]
          block
          w-full
          shadow-sm
          sm:text-sm
          bg-gray-100
          border-hidden
          rounded-md
        "
      >
        <option value="" selected>{{ props.selectedOption }}</option>
        <option value="">Oil</option>
        <option value="">Petrol</option>
      </select>
    </label>
    <div :v-if="props.errors" class="text-red-600 pt-1 text-xs" role="alert">
      {{ props.errors }}
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  selectedOption: String,
});
</script>