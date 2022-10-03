<template>
  <div :class="{ errors: props.errors }" class="col-span-6 sm:col-span-3">
    <label class="block text-gray-700 text-[16px]"
      ><slot />
      <input
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :type="props.fieldtype"
        :name="props.name"
        :id="props.name"
        :placeholder="props.placeholder"
        :readonly="readonly"
        class="
          text-sm text-grey-100 text-[15px]
          file:bg-gray-100
          file:px-6
          file:py-2
          file:rounded-full
          file:border-0
          file:text-[#3A3A3A]
          hover:file:cursor-pointer
        "
      />
    </label>
    <div :v-if="props.errors" class="text-red-600 pt-1 text-xs" role="alert">
      {{ props.errors }}
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  errors: Object,
  name: String,
  placeholder: String,
  fieldtype: String,
  modelValue: String,
  readonly: {
    type: Boolean,
    default: false,
    required: false,
  },
});
const emits = defineEmits(["update:modelValue"]);
</script>