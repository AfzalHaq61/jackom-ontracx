<script setup>
const props = defineProps({
  errors: Object,
  dropdowns: Array,
  name: String,
  fieldtype: String,
  selectedOption: String,
  modelValue: String,
  readonly: {
    type: Boolean,
    default: false,
    required: false,
  },
});
</script>
  
  <template>
  <div
    :class="{ errors: props.errors }"
    class="col-span-6 sm:col-span-3 mb-[20px]"
  >
    <label class="block text-gray-700"
      ><slot />
      <select
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :name="props.name"
        :id="props.name"
        :readonly="readonly"
        :multiple="multiple"
        class="
          mt-1
          focus:ring-[#24C6C9] focus:border-[#24C6C9]
          block
          w-full
          shadow-sm
          sm:text-sm
          bg-gray-100
          text-[#3A3A3A]
          border-hidden
          rounded-md
        "
      >
        <option value="" selected>{{ props.selectedOption }}</option>
        <option
          :disabled="readonly"
          v-for="dropdown in dropdowns"
          :key="dropdown.id"
          :value="dropdown.id"
        >
          {{ dropdown.name }}
        </option>
      </select>
    </label>
    <div :v-if="props.errors" class="text-red-600 pt-1 text-xs" role="alert">
      {{ props.errors }}
    </div>
  </div>
</template>