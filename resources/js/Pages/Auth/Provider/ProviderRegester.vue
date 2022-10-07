<template>
  <Head title="Sign UP Seller" />
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
                  "
                >
                  <h1 class="text-[30px] text-white">A</h1>
                </div>
                <div class="ml-[5px] mt-[10px]">
                  <ProverderProfileImageField
                    fieldtype="file"
                    name="upload_photo"
                    v-model="form.upload_photo"
                    :errors="errors.upload_photo"
                  >
                  </ProverderProfileImageField>
                </div>
              </div>
            </div>
            <div class="md:grid grid-cols-2 gap-[100px]">
              <div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="first_name"
                    placeholder="Enter First Name"
                    v-model="form.first_name"
                    :errors="errors.first_name"
                  >
                    First Name
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
                    name="region"
                    v-model="form.region"
                    :errors="errors.region"
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
                <div class="mb-[30px]">
                  <ImageFileField
                    fieldtype="file"
                    name="license_photo_2"
                    v-model="form.license_photo_2"
                    :errors="errors.license_photo_2"
                  >
                    License Photo
                  </ImageFileField>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="last_name"
                    placeholder="Enter Last Name"
                    v-model="form.last_name"
                    :errors="errors.last_name"
                  >
                    Last Name
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
                    name="city"
                    v-model="form.city"
                    :errors="errors.city"
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
                <div class="mb-[30px]">
                  <ImageFileField
                    fieldtype="file"
                    name="license_photo_1"
                    v-model="form.license_photo_1"
                    :errors="errors.license_photo_1"
                  >
                    License Photo
                  </ImageFileField>
                </div>
              </div>
            </div>
            <div class="relative top-0.5">
              <h1>
                Accept
                <span
                  ><Link :href="route('terms&conditions')" class="text-[#24C6C9]"
                    >terms and conditions</Link
                  ></span
                >
              </h1>
            </div>
            <div class="mt-[70px]">
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
  region: "",
  city: "",
  iban: "",
  account_number: "",
  comercial_activity: "",
  legal_capacity: "",
  license_photo_1: "",
  license_photo_2: "",
  upload_photo: "",
});

function submit() {
  Inertia.post(route("provider.register.store"), form, {
    forceFormData: true,
  });
}
</script>