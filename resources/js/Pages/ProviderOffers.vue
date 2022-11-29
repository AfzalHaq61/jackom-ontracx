<template>
  <Head title="Your Orders" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead :name="name"></HomeHead>
      <!-- Main Content -->
      <div>
        <!-- Orders -->
        <div>
          <div class="flex justify-between text-sm mt-[44px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Sent Offers</h1>
            </div>
          </div>

          <div
            v-for="offer in offers.data"
            :key="offer.uuid"
            class="bg-white rounded-[15px] pt-[18px] mb-[18px]"
          >
            <div class="px-[28px] mb-[35px]">
              <div class="flex">
                <div>
                  <img
                    class="w-[60px] h-[60px] rounded-full"
                    :src="'/images/' + offer.profile_photo"
                  />
                </div>
                <div class="ml-[20px] w-full">
                  <div class="flex justify-between mb-[12px]">
                    <div>
                      <h1 class="text-[16px] font-bold">{{ offer.name }}</h1>
                    </div>
                    <div>
                      <h1 class="text-[16px] font-bold">
                        {{ offer.service_type }}
                      </h1>
                    </div>
                  </div>
                  <div class="flex justify-between mb-[12px]">
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
                    <div>
                      <h1 class="text-[14px] text-[#858585]">
                        Due {{ offer.due_time }}
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
              <div v-if="isOpen">
                <div class="mt-[22px] ml-[78px]">
                  <div>
                    <h1 class="text-[#000000] text-[16px] font-bold">
                      Details
                    </h1>
                  </div>
                  <div class="mt-[10px]">
                    <h1 class="text-[#858585] text-[14px] leading-[17px]">
                      {{ offer.details }}
                    </h1>
                  </div>
                </div>
                <div class="md:grid grid-cols-3 mt-[26px] ml-[78px]">
                  <div class="grid grid-cols-3">
                    <div>
                      <h1 class="text-[#858585] text-[14px]">Time</h1>
                    </div>
                    <div>
                      <h1 class="text-[#24C6C9] text-[14px]">
                        {{ offer.due_time }}
                      </h1>
                    </div>
                    <div>
                      <img src="/images/Line 12.png" alt="" />
                    </div>
                  </div>
                  <div class="grid grid-cols-3">
                    <div>
                      <h1 class="text-[#858585] text-[14px]">Cost</h1>
                    </div>
                    <div>
                      <h1 class="text-[#24C6C9] text-[14px] font-bold">
                        {{ offer.service_cost }}
                      </h1>
                    </div>
                    <div>
                      <img src="/images/Line 12.png" alt="" />
                    </div>
                  </div>
                  <div class="grid grid-cols-3">
                    <div>
                      <h1
                        class="underline text-[#24C6C9] text-[14px] font-bold"
                      >
                        <Link
                          :href="
                            route('provider.offer.edit', { offer: offer.uuid })
                          "
                          >Edit</Link
                        >
                      </h1>
                    </div>
                    <div>
                      <h1
                        class="underline text-[#24C6C9] text-[14px] font-bold"
                      >
                        <Link
                          :href="
                            route('provider.offer.delete', {
                              offer: offer.uuid,
                            })
                          "
                          >Remove</Link
                        >
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              @click="isOpen = !isOpen"
              class="flex justify-center bg-[#EDEDED] py-[8px] rounded-b-[15px]"
            >
              <img
                class="w-[10.24px h-[17.5px]]"
                src="/images/chevronbottom.png"
                alt="chevronbottom"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const props = defineProps({
  offers: Object,
  name: String,
});
const isOpen = ref(true);
</script>