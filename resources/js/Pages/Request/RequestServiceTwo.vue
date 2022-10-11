<template>
  <Head title="Request Service 2" />

  <div class="min-h-screen bg-[#FFFFFF] md:grid grid-cols-7">
    <!-- Home Left Index -->
    <Requestindex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[30px]">
      <!-- Menu Bar -->
      <RequestMenubar />
      <!-- Head -->
      <RequestHead />
      <!-- Main Content -->
      <div>
        <form @submit.prevent="submit">
          <div class="md:grid grid-cols-3">
            <div class="col-span-2 md:pr-[39px]">
              <div
                class="
                  flex
                  justify-between
                  text-sm
                  mt-[44px]
                  mb-[26px]
                  mr-[115px]
                "
              >
                <div>
                  <img
                    class="w-[100px] mb-5"
                    src="/images/Group 156.png"
                    alt="Car Wash and Repair Image"
                  />
                  <h1 class="text-[16px] font-bold">Car Wash and Repair</h1>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Type" name="choose_type">
                    <h1 class="font-bold">Choose Service</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Brand" name="choose_brand">
                    <h1 class="font-bold">Choose Brand</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Type" name="choose_type">
                    <h1 class="font-bold">Choose Type</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Model" name="choose_model">
                    <h1 class="font-bold">Choose Model</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="plate_number"
                    placeholder="Plate Number"
                  >
                    <h1 class="font-bold">Plate Number</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location_from"
                    placeholder="Location From"
                  >
                    <h1 class="font-bold">Location From</h1>
                  </TextField>
                </div>
              </div>
            </div>
            <div class="mt-[67px]">
              <div>
                <ImageField />
              </div>
              <div class="w-[350px]">
                <ImageFileField
                  fieldtype="file"
                  name="upload_photo"
                  v-model="form.upload_photo"
                  :errors="errors.upload_photo"
                >
                </ImageFileField>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-3">
            <div
              class="
                grid
                col-span-2
                justify-center
                bg-[#24C6C9]
                text-white
                rounded-lg
                md:mr-[40px]
                py-2
                mt-5
                mb-[100px]
              "
            >
              <button type="submit">Post Request</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  errors: Object,
  towings: Array,
  brands: Array,
  modals: Array,
});

let form = reactive({
  service_one_type: "",
  brand: "",
  modal: "",
  color: "",
  plate_number: "",
  location_from: "",
  location_to: "",
  upload_photo: "",
});

function submit() {
  Inertia.post(route("request.service.one.store"), form, {
    forceFormData: true,
  });
}
</script>