<template>
  <Head title="SignUp" />
  <IndexHead></IndexHead>
  <div class="bg-gray-100 pb-20">
    <div class="min-h-screen">
      <div class="flex mx-[20px] md:mx-48 pb-5 pt-20">
        <div class="bg-white rounded-full"></div>
        <div class="relative bottom-[5px] mr-[15px]">
          <Link href="/signin"
            ><img class="w-[36px] h-[36px]" src="images/Back.png" alt=""
          /></Link>
        </div>
        <div>
          <h1 class="text-lg font-bold">Create Account</h1>
        </div>
      </div>
      <div
        class="bg-white mx-[20px] md:mx-48 px-[20px] md:px-10 py-10 rounded-lg"
      >
        <div class="mb-5">
          <div class="mb-2">
            <h1 class="font-bold">Account Type</h1>
          </div>
          <div>
            <button
              class="bg-green-100 text-[#24C6C9] rounded-lg py-2 px-16 mr-6"
            >
              <Link :href="route('register.create')">User</Link> 
            </button>
            <button class="bg-gray-100 rounded-lg py-2 px-16">
              <Link :href="route('provider.register.create')">Seller</Link>
            </button>
          </div>
        </div>
        <div>
          <form @submit.prevent="submit">
            <div class="md:grid grid-cols-2 mb-10">
              <div class="mb-5 md:mr-5">
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
              <div class="mb-5 md:ml-5">
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
              <div class="mb-5 md:mr-5">
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
              <div class="mb-5 md:ml-5">
                <TextField
                  fieldtype="text"
                  name="city"
                  placeholder="Enter City"
                  v-model="form.city"
                  :errors="errors.city"
                >
                  City
                </TextField>
              </div>
              <div class="mb-5 md:mr-5">
                <TextField
                  fieldtype="number"
                  name="contact_number"
                  placeholder="Enter Contact Number"
                  v-model="form.contact_number"
                  :errors="errors.contact_number"
                >
                  Contact Number
                </TextField>
              </div>
              <div class="mb-5 md:ml-5">
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
              <div class="mb-5 md:mr-5">
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
              <div class="md:ml-5">
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
            </div>
            <div
              class="
                flex
                justify-center
                bg-[#24C6C9]
                text-white
                rounded-lg
                py-2
                mt-5
                mb-10
              "
            >
              <button type="submit">Next</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ChevronLeftIcon } from "@heroicons/vue/outline";
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  errors: Object,
  countries: Array,
});

let form = reactive({
  first_name: "",
  last_name: "",
  country: "",
  city: "",
  contact_number: "",
  email: "",
  password: "",
  confirm_password: "",
});

function submit() {
  Inertia.post(route("register.store"), form, {
    forceFormData: true,
  });
}
</script>