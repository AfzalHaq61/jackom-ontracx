<template>
  <Head title="Offers Create" />

  <div class="min-h-screen bg-white md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <RequestHead :name="name"></RequestHead>
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="mt-[53px]">
          <div class="flex">
            <div class="relative bottom-[5px] mr-[15px]">
              <Link
                :href="
                  route('provider.request.details', {
                    request: request.uuid,
                  })
                "
                ><img class="w-[36px] h-[36px]" src="/images/Back.png" alt=""
              /></Link>
            </div>
            <div>
              <h1 class="text-[16px] font-bold">Send Offer</h1>
            </div>
          </div>
          <div class="md:grid grid-cols-3 gap-[37px] mt-[45px]">
            <div class="col-span-2">
              <form @submit.prevent="submit">
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="service_cost"
                    placeholder="Enter Estimated Cost of the Service"
                    v-model="form.service_cost"
                    :errors="errors.service_cost"
                  >
                    <h1 class="font-bold">Service Cost</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="due_time"
                    placeholder="Enter Estimated Time"
                    v-model="form.due_time"
                    :errors="errors.due_time"
                  >
                    <h1 class="font-bold">Due Time</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <DescriptionTextField
                    fieldtype="text"
                    name="details"
                    placeholder="Describe your way of Service"
                    v-model="form.details"
                    :errors="errors.details"
                  >
                    <h1 class="font-bold">Details</h1>
                  </DescriptionTextField>
                </div>
                <div
                  class="
                    flex
                    justify-center
                    bg-[#24C6C9]
                    text-white
                    rounded-lg
                    py-2
                    mt-[60px]
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
    </div>
  </div>
</template>

<script setup>
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  errors: Object,
  request: Array,
  provider_id: Number,
  name: String,
});

let form = reactive({
  request_id: props.request.id,
  service_cost: "",
  due_time: "",
  details: "",
});

function submit() {
  Inertia.post(route("provider.offer.store"), form, {
    forceFormData: true,
  });
}
</script>