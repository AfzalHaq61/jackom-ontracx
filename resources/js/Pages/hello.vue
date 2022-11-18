<template>
  <input type="text" name="hello" v-model="form.hello" />
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";
import route from "ziggy-js";

const props = defineProps({
  user: String,
});

let form = reactive({
  hello: props.user.first_name,
});
</script>