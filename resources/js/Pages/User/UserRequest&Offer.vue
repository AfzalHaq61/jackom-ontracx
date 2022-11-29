<template>
  <Head title="Requests" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 pl-[59px] pr-[30px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <HomeHead :name="name"></HomeHead>
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="md:grid grid-cols-3">
          <div class="col-span-2 pr-[30px]">
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
                <h1 class="text-[16px] font-bold">Your Requests</h1>
              </div>
            </div>

            <div
              v-for="request in requests"
              :key="request.uuid"
              class="cursor-pointer mb-[22px]"
            >
              <Link :href="route('user.request', { request: request.id })">
                <div class="bg-white rounded-[15px] p-[18px]">
                  <div>
                    <h1 class="text-[18px] font-bold">
                      {{ request.service_type }}
                    </h1>
                  </div>
                  <div>
                    <h1 class="w-fit text-[#858585] mt-[22px] mb-[22px]">
                      {{ request.description }}
                    </h1>
                  </div>
                  <div class="flex">
                    <div class="pr-[22px]">
                      <img
                        class="w-[88px] h-[78px] rounded-[4px]"
                        :src="'/images/' + request.upload_photo"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="flex justify-end font-bold mt-[5px]">
                    <h1 class="text-[13px]">{{ date(request.created_at) }}</h1>
                  </div>
                </div>
              </Link>
            </div>
          </div>

          <div class="mt-[44px]">
            <div class="text-[16px] mb-[13px]">
              <h1 class="font-bold">Offers</h1>
            </div>

            <div
              v-for="offer in offers.data"
              :key="offer.uuid"
              class="bg-white rounded-[15px] mb-[20px] p-[12px]"
            >
              <Link
                :href="
                  route('user.request.details', {
                    offer: offer.id,
                  })
                "
              >
                <div class="flex">
                  <div>
                    <img
                      class="w-[60px] h-[60px] rounded-full"
                      :src="'/images/' + offer.profile_photo"
                    />
                  </div>
                  <div class="ml-[20px]">
                    <div class="mb-[12px]">
                      <h1 class="text-[16px] font-bold">{{ offer.name }}</h1>
                    </div>
                    <div>
                      <div class="flex">
                        <div class="relative top-1 mr-[5px]">
                          <img
                            class="w-[12px] h-[12px]"
                            src="/images/location-pin.png"
                            alt=""
                          />
                        </div>
                        <div>
                          <h1 class="text-[14px] text-[#858585]">
                            Riyadh, {{ offer.location }} Saudi Arabia
                          </h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="my-[30px]">
                    <h1 class="text-[#858585] text-[16px]">
                      {{ offer.details }}
                    </h1>
                  </div>
                  <div class="flex mt-[25px]">
                    <div class="flex mr-[40px]">
                      <div class="mr-[50px]">
                        <h1 class="text-[#858585] text-[14px]">Time</h1>
                      </div>
                      <div>
                        <h1 class="font-bold text-[#24C6C9] text-[14px]">
                          {{ offer.due_time }}
                        </h1>
                      </div>
                    </div>
                    <div class="flex">
                      <div class="mr-[50px]">
                        <h1 class="text-[#858585] text-[14px]">Cost</h1>
                      </div>
                      <div>
                        <h1 class="font-bold text-[#24C6C9] text-[14px]">
                          {{ offer.service_cost }}
                        </h1>
                      </div>
                    </div>
                  </div>
                </div>
              </Link>
              <div class="mt-[20px]">
                <div>
                  <img src="/images/Line 11.png" alt="" />
                </div>
                <div class="flex justify-center">
                  <div class="flex justify-center items-end">
                    <h1 class="text-[#24C6C9] text-[14px] font-bold">
                      <Link
                        :href="
                          route('user.chat.store', {
                            reciever_id: offer.user_id,
                          })
                        "
                        >Messege</Link
                      >
                    </h1>
                  </div>
                  <div class="flex justify-center mx-[50px]">
                    <img src="/images/Line 12.png" alt="" />
                  </div>
                  <div class="flex justify-center items-end">
                    <h1 class="text-[#24C6C9] text-[14px] font-bold">
                      <Link
                      :href="
                          route('payment', {
                            offer: offer.id,
                          })
                        "
                        >Start Order</Link
                      >
                    </h1>
                  </div>
                </div>
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
  offers: Object,
  name: String,
});

function date(value) {
  return moment(value).format("YYYY-MM-DD");
}
</script>