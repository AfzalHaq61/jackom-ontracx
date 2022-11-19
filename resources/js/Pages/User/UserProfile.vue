<template>
  <Head title="Profile" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <form @submit.prevent="submit">
        <div class="md:grid grid-cols-9 mt-[80px]">
          <div class="md:col-span-3 mb-[50px]">
            <div class="bg-white rounded-[20px] pt-[40px] pb-[30px]">
              <div class="flex justify-center">
                <img src="/images/Ellipse 15.png" alt="" />
              </div>
              <div :class="{ errors: props.errors }">
                    <div
                      class="
                        flex
                        items-center
                        justify-center
                        border-2 rounded-[10px]
                        bg-gray-100
                        focus:ring-[#24C6C9] focus:border-[#24C6C9]
                        px-[35px] py-[12px]
                        mt-[50px] mx-[90px]
                      "
                    >
                      <input
                        class="
                          text-sm text-grey-100 text-[15px]
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
          </div>
          <div
            class="
              col-span-6
              bg-white
              rounded-[20px]
              px-[40px]
              py-[40px]
              md:ml-[40px]
            "
          >
            <div>
              <h1 class="text-[16px] font-bold">Personal Information</h1>
            </div>

            <div>
              <ProfileTextField
                fieldtype="text"
                name="first_name"
                placeholder="First Name"
                v-model="form.first_name"
                :errors="errors.first_name"
              >
              </ProfileTextField>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="last_name"
                placeholder="Last Name"
                v-model="form.last_name"
                :errors="errors.last_name"
              >
              </ProfileTextField>
            </div>
            <div>
              <ProfileSelectField
                selectedOption="Select Region"
                name="region_id"
                :dropdowns="regions"
                v-model="form.region_id"
                :errors="errors.password_id"
              >
              </ProfileSelectField>
            </div>
            <div>
              <ProfileSelectField
                selectedOption="Select City"
                name="city_id"
                :dropdowns="cities"
                v-model="form.city_id"
                :errors="errors.city_id"
              >
              </ProfileSelectField>
            </div>
            <div>
              <h1 class="text-[16px] font-bold">Contact Information</h1>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="contact_number"
                placeholder="Contact Number"
                v-model="form.contact_number"
                :errors="errors.contact_number"
              >
              </ProfileTextField>
            </div>
            <div
              class="
                flex
                justify-center
                bg-[#24C6C9]
                text-white
                rounded-lg
                py-2
                text-[16px]
                mt-[54px]
              "
            >
              <button type="submit">Save Changes</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  user: Array,
  regions: Array,
  cities: Array,
  errors: Object,
});

let form = reactive({
  uuid: props.user.uuid,
  first_name: props.user.first_name,
  last_name: props.user.last_name,
  region_id: props.user.region_id,
  city_id: props.user.city_id,
  contact_number: props.user.contact_number,
  email: props.user.email,
  password: props.user.password,
  checkbox: props.user.checkbox,
  _method: "put",
});

function onFileChanged($event) {
  form.upload_photo = $event.target.files[0];
}

function submit() {
  Inertia.post(route("user.profile.update", { user: props.user.uuid }), form, {
    forceFormData: true,
  });
}
</script>