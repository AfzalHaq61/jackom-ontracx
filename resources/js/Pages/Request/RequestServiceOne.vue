<template>
  <Head title="Request Service One" />

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
            <div class="col-span-2 md:pr-[40px]">
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
                    src="/images/towing.png"
                    alt="Towing and Shipping Image"
                  />
                  <h1 class="text-[16px] font-bold">Towing and Shipping</h1>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Service Type"
                    name="service_one_type"
                    v-model="form.service_one_type"
                    :errors="errors.service_one_type"
                    :dropdowns="towings"
                  >
                    Service Type
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Brand"
                    name="brand"
                    v-model="form.brand"
                    :errors="errors.brand"
                    :dropdowns="brands"
                  >
                    Brand
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Modal"
                    name="modal"
                    v-model="form.modal"
                    :errors="errors.modal"
                    :dropdowns="modals"
                  >
                    Model
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="color"
                    placeholder="Enter color"
                    v-model="form.color"
                    :errors="errors.color"
                  >
                    Color
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="number"
                    name="plate_number"
                    placeholder="Enter Plate Number"
                    v-model="form.plate_number"
                    :errors="errors.plate_number"
                  >
                    Plate Number
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location_from"
                    placeholder="Enter Location From"
                    v-model="form.location_from"
                    :errors="errors.location_from"
                  >
                    Location From
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location_to"
                    placeholder="Enter Location To"
                    v-model="form.location_to"
                    :errors="errors.location_to"
                  >
                    Location To
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
  upload_photo: ""
});

function submit() {
  Inertia.post(route("request.service.one.store"), form, {
    forceFormData: true,
  });
}
</script>