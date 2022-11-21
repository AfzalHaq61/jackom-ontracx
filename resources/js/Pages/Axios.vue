<template>
  <form @submit.prevent="testMethod(1)">
    <input type="text" name="test" v-model="form.test" />
    <button type="submit">submit</button>
  </form>
</template>
  
<script setup>
import axios from "axios";
import { reactive } from "vue";

let form = reactive({
  test: '',
});

function testMethod(data) {
  axios
    .post("/test?id="+data)
    .then(function (response) {
      alert(response.data)
    })
    .catch(function (error) {
      alert(error);
    });
}
</script>