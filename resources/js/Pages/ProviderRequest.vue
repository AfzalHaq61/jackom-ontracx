<template>
  <Head title="Provider Request" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead :name="name"></HomeHead>
      <!-- Main Content -->
      <div>
        <!-- Orders -->
        <div class="mb-[22px]">
          <div class="flex justify-between text-sm mt-[55px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">
                Services in Riyadh, Saudi Arabia
              </h1>
            </div>
          </div>
          <div
            v-for="request in requests"
            :key="request.uuid"
            class="mb-[20px]"
          >
            <div class="bg-white rounded-[15px] p-[18px]">
              <div class="flex justify-between">
                <div>
                  <h1 class="text-[18px] font-bold">
                    {{ request.service_type }}
                  </h1>
                </div>
                <div class="flex items-center font-bold">
                  <h1 class="text-[13px]">{{ date(request.created_at) }}</h1>
                </div>
              </div>
              <div class="flex mt-[6px]">
                <div class="relative top-[4px] pr-[5px]">
                  <img
                    class="w-[12px] h-[12px]"
                    src="/images/location-pin.png"
                    alt=""
                  />
                </div>
                <div>
                  <Link :href="request.location"
                    ><h1 class="text-[14px] text-[#858585]">
                      Specific Location, Saudi Arabia
                    </h1></Link
                  >
                </div>
              </div>
              <div class="mt-[12px]">
                <h1 class="text-[16px] text-[#858585]">
                  {{ request.description }}
                </h1>
              </div>
              <div class="flex mt-[35px]">
                <div class="mr-[20px]">
                  <img
                    class="w-[88px] h-[78px] rounded-[4px]"
                    :src="'/images/' + request.upload_photo"
                    alt=""
                  />
                </div>
              </div>
              <div class="flex justify-end">
                <button
                  class="
                    text-white
                    rounded-[6px]
                    text-[18px]
                    bg-[#24C6C9]
                    py-[10px]
                    px-[18px]
                  "
                >
                  <Link
                    :href="
                      route('provider.request.details', {
                        request: request.uuid,
                      })
                    "
                    >Details</Link
                  >
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import moment from "moment";
const props = defineProps({
  requests: Object,
  name: String,
});

function date(value) {
  return moment(value).format("YYYY-MM-DD");
}
</script>