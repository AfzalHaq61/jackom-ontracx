<template>
  <Head title="Your Orders" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[20px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead :name="name"></HomeHead>
      <!-- Main Content -->
      <div>
        <!-- Orders -->
        <div>
          <div class="flex justify-between text-sm mt-[44px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Your Orders</h1>
            </div>
          </div>

          <div v-for="order in orders.data"
            :key="order.id" class="bg-white rounded-[15px] pt-[18px] mb-[18px]">
            <div class="px-[28px] mb-[35px]">
              <div class="flex">
                <div class="w-[60px] h-[60px] rounded-full">
                  <img :src="'/images/' + order.upload_photo" alt="" />
                </div>
                <div class="ml-[20px] w-full">
                  <div class="flex justify-between mb-[12px]">
                    <div>
                      <h1 class="text-[16px] font-bold">{{ order.name }}</h1>
                    </div>
                    <div>
                      <h1 class="text-[14px] ml-[120px]">Cost</h1>
                    </div>
                    <div>
                      <h1 class="text-[16px] font-bold">{{ order.service_type }}</h1>
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
                          Riyadh, {{ order.location }} Saudi Arabia
                        </h1>
                      </div>
                    </div>
                    <div>
                      <h1 class="text-[14px] text-[#24C6C9]">{{ order.service_cost }}</h1>
                    </div>
                    <div>
                      <h1 class="text-[14px] text-[#858585]">
                        Due {{ order.due_time }}
                      </h1>
                    </div>
                  </div>
                  <div></div>
                </div>
              </div>
              <div v-if="isOpen">
                <div class="mt-[22px]">
                  <div>
                    <h1 class="text-[#000000] text-[14px] font-bold">
                      Requirments
                    </h1>
                  </div>
                  <div class="mt-[10px]">
                    <h1 class="text-[#858585] text-[14px] leading-[17px]">
                      {{ order.request_details }}
                    </h1>
                  </div>
                </div>
                <div class="mt-[22px]">
                  <div>
                    <h1 class="text-[#000000] text-[14px] font-bold">Offer</h1>
                  </div>
                  <div class="mt-[10px]">
                    <h1 class="text-[#858585] text-[14px] leading-[17px]">
                      {{ order.offer_details }}
                    </h1>
                  </div>
                </div>
                <div v-if="!order.status" class="flex justify-end mt-[40px]">
                  <button
                    class="
                      border-2 border-[#24C6C9]
                      text-[#24C6C9]
                      rounded-lg
                      py-2
                      px-4
                    "
                  >
                    <Link
                      :href="route('user.order.update', { order: order.uuid })"
                      >Mark Completed</Link
                    >
                  </button>
                </div>
              </div>
              <div></div>
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
  orders: Object,
  name: String,
});
const isOpen = ref(true);
</script>