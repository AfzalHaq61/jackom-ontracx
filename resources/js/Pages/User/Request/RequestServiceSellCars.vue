<template>
  <Head title="Request Service Sell Cars" />

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
                    src="/images/sell your broken car.png"
                    alt="Sell Car Image"
                  />
                  <h1 class="text-[16px] font-bold">Sell Your Car</h1>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <SelectRequestField
                    selectedOption="Select Service Type"
                    name="service_sellcars_type"
                    v-model="form.service_sellcars_type"
                    :errors="errors.service_sellcars_type"
                    :dropdowns="sells"
                  >
                    Service Type
                  </SelectRequestField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Category"
                    name="category"
                    v-model="form.category"
                    :errors="errors.category"
                    :dropdowns="categories"
                  >
                    Category
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="manufacturing_year"
                    placeholder="Enter Manufacturing Year"
                    v-model="form.manufacturing_year"
                    :errors="errors.manufacturing_year"
                  >
                    Manufacturing Year
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="regional_specification"
                    placeholder="Enter Regional Specification"
                    v-model="form.regional_specification"
                    :errors="errors.regional_specification"
                  >
                    Regional Specification
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="paint"
                    placeholder="Enter Paint"
                    v-model="form.paint"
                    :errors="errors.paint"
                  >
                    Paint
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="chasis_case"
                    placeholder="Enter Chasis Case"
                    v-model="form.chasis_case"
                    :errors="errors.chasis_case"
                  >
                    Chasis Case
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="kilo_meters"
                    placeholder="Enter Kilo Meters"
                    v-model="form.kilo_meters"
                    :errors="errors.kilo_meters"
                  >
                    Kilo Meters
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="color"
                    placeholder="Enter Color"
                    v-model="form.color"
                    :errors="errors.color"
                  >
                    Color
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Fuel Type"
                    name="fuel_type"
                    v-model="form.fuel_type"
                    :errors="errors.fuel_type"
                    :dropdowns="fueltypes"
                  >
                    Fuel Type
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Transmission Type"
                    name="transmission_type"
                    v-model="form.transmission_type"
                    :errors="errors.transmission_type"
                    :dropdowns="transmissiontypes"
                  >
                    Transmision Type
                  </SelectOptionField>
                </div>

                <!-- <div class="mb-[30px]">
                    <div class="mb-[20px]">
                      <h1 class="text-[14px] text-[#3A3A3A]">Fuel Type</h1>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-4 gap-[12px]">
                      <button
                        class="
                          rounded-[10px]
                          text-white
                          bg-[#24C6C9]
                          px-[35px]
                          py-[16px]
                        "
                      >
                        Electric
                      </button>
                      <button
                        class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                      >
                        Hybrid
                      </button>
                      <button
                        class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                      >
                        Petrol
                      </button>
                      <button
                        class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                      >
                        Diesel
                      </button>
                      <button
                        class="
                          rounded-[10px]
                          bg-[#F1F1F1]
                          w-max
                          px-[35px]
                          py-[16px]
                        "
                      >
                        Hybrid Plug-in
                      </button>
                    </div>
                  </div> -->

                <!-- <div class="mb-[50px]">
                    <div class="mb-[20px]">
                      <h1 class="text-[14px] text-[#3A3A3A]">Transmision Type</h1>
                    </div>
                    <div class="mb-[12px]">
                      <button
                        class="
                          rounded-[10px]
                          text-white
                          bg-[#24C6C9]
                          px-[35px]
                          py-[16px]
                          mr-[16px]
                        "
                      >
                        Manual
                      </button>
                      <button
                        class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                      >
                        Automatic
                      </button>
                    </div>
                  </div> -->

                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="name"
                    placeholder="Enter Name"
                    v-model="form.name"
                    :errors="errors.name"
                  >
                    Name
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <DescriptionTextField
                    fieldtype="text"
                    name="description"
                    placeholder="Description"
                    v-model="form.description"
                    :errors="errors.description"
                  >
                    Description
                  </DescriptionTextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="price"
                    placeholder="Enter Price"
                    v-model="form.price"
                    :errors="errors.price"
                  >
                    Price
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location"
                    placeholder="Enter Location"
                    v-model="form.location"
                    :errors="errors.location"
                  >
                    Location
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
  sells: Array,
  categories: Array,
  fueltypes: Array,
  transmissiontypes: Array,
});

let form = reactive({
  service_sellcars_type: "",
  category: "",
  manufacturing_year: "",
  regional_specification: "",
  paint: "",
  chasis_case: "",
  kilo_meters: "",
  color: "",
  fuel_type: "",
  transmission_type: "",
  name: "",
  description: "",
  price: "",
  location: "",
  upload_photo: "",
});

function onFileChanged($event) {
  form.upload_photo = $event.target.files[0];
}

function submit() {
  Inertia.post(route("user.request-service.sell-car.store"), form, {
    forceFormData: true,
  });
}
</script>