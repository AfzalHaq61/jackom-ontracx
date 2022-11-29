<template>
  <Head title="Request Service Six" />

  <div class="min-h-screen bg-[#FFFFFF] md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[30px]">
      <!-- Menu Bar -->
      <RequestMenubar />
      <!-- Head -->
      <RequestHead :name="name"></RequestHead>
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
                    src="/images/delivery services.png"
                    alt="Delevering Household Image"
                  />
                  <h1 class="text-[16px] font-bold">
                    Free services and delivering household needs
                  </h1>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <SelectRequestField
                    selectedOption="Select Service Type"
                    name="service_six_type"
                    v-model="form.service_six_type"
                    :errors="errors.service_six_type"
                    :dropdowns="households"
                  >
                    Service Type
                  </SelectRequestField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Kind"
                    name="kind"
                    v-model="form.kind"
                    :errors="errors.kind"
                    :dropdowns="kinds"
                  >
                    What Kind
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="my_location"
                    v-model="form.my_location"
                    :errors="errors.my_location"
                    placeholder="My Location"
                  >
                    My Location
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="to_location"
                    v-model="form.to_location"
                    :errors="errors.to_location"
                    placeholder="To Location"
                  >
                    To Location
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
  households: Array,
  kinds: Array,
  name: String,
});

let form = reactive({
  service_six_type: "",
  kind: "",
  my_location: "",
  to_location: "",
  upload_photo: "",
});

function onFileChanged($event) {
  form.upload_photo = $event.target.files[0];
}

function submit() {
  Inertia.post(route("user.request-service.six.store"), form, {
    forceFormData: true,
  });
}
</script>