<template>
  <Head title="Regester" />
  <IndexHead></IndexHead>
  <div class="bg-gray-100 pb-20">
    <div class="min-h-screen">
      <div class="flex mx-[20px] md:mx-48 pb-5 pt-20">
        <div class="bg-white rounded-full"></div>
        <div class="relative bottom-[5px] mr-[15px]">
          <Link :href="route('login.create')"
            ><img class="w-[36px] h-[36px] z-0" src="/images/Back.png" alt=""
          /></Link>
        </div>
        <div>
          <h1 class="text-lg font-bold">Create Account</h1>
        </div>
      </div>
      <div
        class="bg-white mx-[20px] md:mx-48 px-[20px] md:px-10 py-10 rounded-lg"
      >
        <div>
          <div class="mb-2">
            <h1 class="font-bold">Account Type</h1>
          </div>
          <div>
            <button
              class="
                bg-green-100
                text-[#24C6C9]
                rounded-lg
                h-[40px]
                w-[170px]
                md:mr-6
                mb-5
              "
            >
              <Link :href="route('register.create')">User</Link>
            </button>
            <button class="bg-gray-100 rounded-lg h-[40px] w-[170px] mb-5">
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
                  selectedOption="Select Region"
                  name="region_id"
                  v-model="form.region_id"
                  :errors="errors.region_id"
                  :dropdowns="regions"
                >
                  Region
                </SelectOptionField>
              </div>
              <div class="mb-5 md:ml-5">
                <SelectOptionField
                  selectedOption="Select city"
                  name="city"
                  v-model="form.city_id"
                  :errors="errors.city_id"
                  :dropdowns="cities"
                >
                  City
                </SelectOptionField>
              </div>
              <div class="mb-5 md:mr-5">
                <TextField
                  fieldtype="text"
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
            <!-- Terms and Condition -->
            <div>
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
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  errors: Object,
  regions: Array,
  cities: Array,
});

let form = reactive({
  first_name: "",
  last_name: "",
  region_id: "",
  city_id: "",
  contact_number: "",
  email: "",
  password: "",
  confirm_password: "",
  checkbox: "",
});

function submit() {
  Inertia.post(route("register.store"), form, {
    forceFormData: true,
  });
}
</script>