<template>
  <div class="flex">
    <div class="mr-2">
      <input
        class="rounded-[5px]"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :type="props.fieldtype"
        :name="props.name"
        :id="props.name"
      />
    </div>
    <div class="relative top-0.5">
      <h1>
        Accept
        <span
          ><Link href="/terms&conditions" class="text-[#24C6C9]"
            >terms and conditions</Link
          ></span
        >
      </h1>
    </div>
  </div>
  <div :v-if="props.errors" class="text-red-600 pt-1 text-xs" role="alert">
    {{ props.errors }}
  </div>
</template>

<script setup>
const props = defineProps({
  errors: Object,
  name: String,
  fieldtype: String,
  modelValue: String,
});
const emits = defineEmits(["update:modelValue"]);
</script>