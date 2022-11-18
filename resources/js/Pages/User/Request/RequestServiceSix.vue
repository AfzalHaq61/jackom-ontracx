<template>
  <Head title="Request Service 6" />

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
                  <SelectOptionField
                    selectedOption="Select Service Type"
                    name="service_six_type"
                    v-model="form.service_six_type"
                    :errors="errors.service_six_type"
                    :dropdowns="households"
                  >
                    Service Type
                  </SelectOptionField>
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
            <div class="mt-[120px]">
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
  households: Array,
  kinds: Array,
  dummy: String,
});

let form = reactive({
  service_six_type: "",
  kind: "",
  my_location: "",
  to_location: "",
  upload_photo: "",
});

function submit() {
  Inertia.post(route("request.service.six.store"), form, {
    forceFormData: true,
  });
}
</script>