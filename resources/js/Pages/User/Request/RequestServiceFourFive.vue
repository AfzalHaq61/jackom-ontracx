<template>
  <Head title="Request Service Four and Five" />

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
                    src="/images/shipping and forwarding.png"
                    alt="Deportation and Baggage Image"
                  />
                  <h1 class="text-[16px] font-bold">
                    Deportation and Baggage transfer
                  </h1>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <SelectRequestField
                    selectedOption="Select Service Type"
                    name="service_fourfive_type"
                    v-model="form.service_fourfive_type"
                    :errors="errors.service_fourfive_type"
                    :dropdowns="deportations"
                  >
                    Service Type
                  </SelectRequestField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Shipping Type"
                    name="shipping_type"
                    v-model="form.shipping_type"
                    :errors="errors.shipping_type"
                    :dropdowns="shippingtypes"
                  >
                    Shipping Type
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="size"
                    placeholder="Enter Size"
                    v-model="form.size"
                    :errors="errors.size"
                  >
                    Size
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="weight"
                    placeholder="Enter Weight"
                    v-model="form.weight"
                    :errors="errors.weight"
                  >
                    Weight
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
            <div :class="{ errors: props.errors }" class="mt-[163px]">
              <div>
                <h1 class="text-[16px] font-bold mb-[13px]">Add images</h1>
              </div>
              <div
                class="
                  flex
                  items-center
                  justify-center
                  bg-gray-100
                  rounded-[10px]
                  focus:ring-[#24C6C9] focus:border-[#24C6C9]
                  w-[350px]
                  h-[200px]
                "
              >
                <input
                  class="
                    text-sm text-grey-100 text-[15px]
                    file:bg-gray-100
                    file:w-full
                    file:rounded-full
                    file:border-0
                    file:text-[#3A3A3A]
                    hover:file:cursor-pointer
                  "
                  type="file"
                  name="upload_photo"
                  id="upload_photo"
                  @change="onFileChanged($event)"
                  accept="image/*"
                />
              </div>
              <div
                :v-if="errors.upload_photo"
                class="text-red-600 pt-1 text-xs"
                role="alert"
              >
                {{ errors.upload_photo }}
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
    deportations: Array,
    shippingtypes: Array,
  });
  
  let form = reactive({
    service_fourfive_type: "",
    shipping_type: "",
    size: "",
    weight: "",
    location_from: "",
    location_to: "",
    upload_photo: "",
  });

function onFileChanged($event) {
  form.upload_photo = $event.target.files[0];
}

function submit() {
  Inertia.post(route("user.request-service.four-five.store"), form, {
    forceFormData: true,
  });
}
</script>