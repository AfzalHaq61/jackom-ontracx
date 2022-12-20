<template>
  <Head title="Provider Regestration" />
  <IndexHead></IndexHead>
  <div class="bg-gray-100 pb-20">
    <div class="min-h-screen">
      <div class="flex mx-[20px] md:mx-48 pb-5 pt-20">
        <div class="bg-white rounded-full"></div>
        <div class="relative bottom-[5px] mr-[15px]">
          <Link :href="route('login.create')"
            ><img class="w-[36px] h-[36px]" src="/images/Back.png" alt=""
          /></Link>
        </div>
        <div>
          <h1 class="text-lg font-bold">Create Account</h1>
        </div>
      </div>
      <div
        class="
          bg-white
          mx-[20px]
          md:mx-48
          px-[20px]
          md:px-[60px]
          py-[60px]
          rounded-lg
        "
      >
        <div class="mb-5">
          <div class="mb-2">
            <h1 class="font-bold text-[16px]">Account Type</h1>
          </div>
        </div>
        <div>
          <form @submit.prevent="submit">
            <div class="md:grid grid-cols-2">
              <div class="mb-5">
                <button
                  class="bg-gray-100 rounded-lg h-[40px] w-[170px] md:mr-6 mb-5"
                >
                  <Link :href="route('register.create')">User</Link>
                </button>
                <button
                  class="
                    bg-green-100
                    text-[#24C6C9]
                    rounded-lg
                    h-[40px]
                    w-[170px]
                    mb-5
                  "
                >
                  <Link :href="route('provider.register.create')">Seller</Link>
                </button>
              </div>
              <div class="flex relative bottom-[10px] md:pl-[50px]">
                <div
                  class="
                    flex
                    justify-center
                    items-center
                    rounded-full
                    bg-[#24C6C9]
                    w-[60px]
                    h-[60px]
                    mr-[10px]
                  "
                >
                  <h1 class="text-[30px] text-white">A</h1>
                </div>
                <div :class="{ errors: props.errors }">
                  <div
                    class="
                      flex
                      items-center
                      w-[150px]
                      border-2
                      rounded-[50px]
                      bg-gray-100
                      focus:ring-[#24C6C9] focus:border-[#24C6C9]
                      py-[4px]
                      mt-[12px]
                    "
                  >
                    <input
                      class="
                        text-sm text-grey-100 text-[15px]
                        file:rounded-full
                        file:w-full
                        file:border-0
                        file:text-[#3A3A3A]
                        hover:file:cursor-pointer
                      "
                      type="file"
                      name="upload_photo"
                      id="upload_photo"
                      @change="uploadPhoto($event)"
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
            <div class="md:grid grid-cols-2 gap-[100px]">
              <div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="first_name"
                    placeholder="Enter Full Name"
                    v-model="form.first_name"
                    :errors="errors.first_name"
                  >
                    Full Name
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="email"
                    name="email"
                    placeholder=" Enter Email"
                    v-model="form.email"
                    :errors="errors.email"
                  >
                    Email
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="Password"
                    name="password"
                    placeholder="Create Password"
                    v-model="form.password"
                    :errors="errors.password"
                  >
                    Password
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="address"
                    placeholder="Enter Shop Adress"
                    v-model="form.address"
                    :errors="errors.address"
                  >
                    Address
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Country"
                    name="country"
                    v-model="form.country"
                    :errors="errors.country"
                    :dropdowns="countries"
                  >
                    Country
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Region"
                    name="region_id"
                    v-model="form.region_id"
                    :errors="errors.region_id"
                    :dropdowns="regions"
                  >
                    Region
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="number"
                    name="iban"
                    placeholder="Enter bank IBAN"
                    v-model="form.iban"
                    :errors="errors.iban"
                  >
                    IBAN
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="comercial_activity"
                    placeholder="Comercial Activity"
                    v-model="form.comercial_activity"
                    :errors="errors.comercial_activity"
                  >
                    Comercial Activity
                  </TextField>
                </div>
                <div :class="{ errors: props.errors.license_photo_1 }">
                  <label class="block text-gray-700 text-[16px]">
                    Licence Photo One
                    <div
                      class="
                        flex
                        items-center
                        justify-center
                        bg-gray-100
                        rounded-[10px]
                        focus:ring-[#24C6C9] focus:border-[#24C6C9]
                        w-full
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
                        name="license_photo_1"
                        id="license_photo_1"
                        @change="licensePhotoOne($event)"
                        accept="image/*"
                      />
                    </div>
                  </label>
                  <div
                    :v-if="errors.license_photo_1"
                    class="text-red-600 pt-1 text-xs"
                    role="alert"
                  >
                    {{ errors.license_photo_1 }}
                  </div>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="last_name"
                    placeholder="Enter Nick Name"
                    v-model="form.last_name"
                    :errors="errors.last_name"
                  >
                    Nick Name
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="mobile_number"
                    placeholder="Enter Mobile Number"
                    v-model="form.mobile_number"
                    :errors="errors.mobile_number"
                  >
                    Mobile Number
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="Password"
                    name="confirm_password"
                    placeholder="Confirm Password"
                    v-model="form.confirm_password"
                    :errors="errors.confirm_password"
                  >
                    Confirm Password
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="registration_number"
                    placeholder="Enter Number"
                    v-model="form.registration_number"
                    :errors="errors.registration_number"
                  >
                    ID or Comercial Registration number
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select Nationality"
                    name="nationality"
                    v-model="form.nationality"
                    :errors="errors.nationality"
                    :dropdowns="nations"
                  >
                    Nationality
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Select City"
                    name="city_id"
                    v-model="form.city_id"
                    :errors="errors.city_id"
                    :dropdowns="cities"
                  >
                    City
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="account_number"
                    placeholder="Enter Account number"
                    v-model="form.account_number"
                    :errors="errors.account_number"
                  >
                    Account Number
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="legal_capacity"
                    placeholder="Enter Legal Capacity"
                    v-model="form.legal_capacity"
                    :errors="errors.legal_capacity"
                  >
                    Legal Capacity
                  </TextField>
                </div>
                <div :class="{ errors: props.errors.license_photo_2 }">
                  <label class="block text-gray-700 text-[16px]">
                    Licence Photo Two
                    <div
                      class="
                        flex
                        items-center
                        justify-center
                        bg-gray-100
                        rounded-[10px]
                        focus:ring-[#24C6C9] focus:border-[#24C6C9]
                        w-full
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
                        name="license_photo_2"
                        id="license_photo_2"
                        @change="licensePhotoTwo($event)"
                        accept="image/*"
                      />
                    </div>
                  </label>
                  <div
                    :v-if="errors.license_photo_2"
                    class="text-red-600 pt-1 text-xs"
                    role="alert"
                  >
                    {{ errors.license_photo_2 }}
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-[70px]">
              <div class="flex">
                <div class="mr-2">
                  <input
                    class="rounded-[5px]"
                    type="checkbox"
                    name="checkbox"
                    v-model="form.checkbox"
                  />
                </div>
                <div class="relative top-0.5">
                  <h1>
                    Accept
                    <span
                      ><Link href="/terms&conditions" class="text-[#24C6C9]"
                        >terms and conditions</Link
                      ></span
                    >
                  </h1>
                </div>
              </div>
              <div
                :v-if="props.errors.checkbox"
                class="text-red-600 pt-1 text-xs"
                role="alert"
              >
                {{ props.errors.checkbox }}
              </div>
            </div>
            <div class="mt-5">
              <FormButton type="submit">Sign Up</FormButton>
            </div>
          </form>
        </div>
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
  nations: Array,
  countries: Array,
  cities: Array,
  regions: Array,
});

let form = reactive({
  first_name: "",
  last_name: "",
  email: "",
  password: "",
  confirm_password: "",
  address: "",
  mobile_number: "",
  registration_number: "",
  nationality: "",
  country: "",
  region_id: "",
  city_id: "",
  iban: "",
  account_number: "",
  comercial_activity: "",
  legal_capacity: "",
  license_photo_1: "",
  license_photo_2: "",
  upload_photo: "",
  checkbox: "",
});

function licensePhotoOne($event) {
  form.license_photo_1 = $event.target.files[0];
}

function licensePhotoTwo($event) {
  form.license_photo_2 = $event.target.files[0];
}

function uploadPhoto($event) {
  form.upload_photo = $event.target.files[0];
}

function submit() {
  Inertia.post(route("provider.register.store"), form, {
    forceFormData: true,
  });
}
</script>