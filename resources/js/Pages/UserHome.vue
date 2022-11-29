<template>
  <Head title="User Home" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead :name="name"></HomeHead>
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div>
          <div class="flex justify-between text-sm mt-[44px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">
                Services in Riyadh, Saudi Arabia
              </h1>
            </div>
            <div>
              <Link
                class="text-[16px] text-[#858585]"
                :href="route('user.all-services')"
                >See All</Link
              >
            </div>
          </div>

          <div class="flex w-full overflow-x-auto pb-[10px]">
            <div
              class="
                bg-[#FFFFFF]
                p-[30px]
                pt-[70px]
                h-[300px]
                rounded-[10.84px]
                mr-[40px]
              "
            >
              <Link :href="route('user.request-service.one.create')">
                <div class="grid place-content-center mb-[40px]">
                  <img
                    class="w-[100px]"
                    src="/images/towing and shipping.png"
                    alt="Towing Shipping image"
                  />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">
                    Towing and Shipping
                  </h1>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                p-[30px]
                pt-[70px]
                h-[300px]
                rounded-[10.84px]
                mr-[40px]
              "
            >
              <Link :href="route('user.request-service.two.create')">
                <div class="grid place-content-center mb-[40px]">
                  <img
                    class="w-[100px]"
                    src="/images/car maintenance and care.png"
                    alt="Car Wash and Home Repair Image"
                  />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">
                    Car Maintenance and Care
                  </h1>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                p-[30px]
                pt-[70px]
                h-[300px]
                rounded-[10.84px]
                mr-[40px]
              "
            >
              <Link :href="route('user.request-service.three.create')">
                <div class="grid place-content-center mb-[40px]">
                  <img
                    class="w-[100px]"
                    src="/images/spare parts.png"
                    alt="Spare Parts Image"
                  />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">
                    Spare Parts Request
                  </h1>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                p-[30px]
                pt-[70px]
                h-[300px]
                rounded-[10.84px]
                mr-[40px]
              "
            >
              <Link :href="route('user.request-service.four-five.create')">
                <div class="grid place-content-center mb-[40px]">
                  <img
                    class="w-[100px]"
                    src="/images/shipping and forwarding.png"
                    alt="Deportation And Buggage Image"
                  />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">
                    Shipping and Forwarding
                  </h1>
                </div>
              </Link>
            </div>
          </div>
        </div>
        <!-- Orders -->
        <div>
          <div class="flex justify-between text-sm mt-[68px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Your Orders</h1>
            </div>
            <div class="text-[#858585]">
              <Link :href="route('user.order')">See All</Link>
            </div>
          </div>

          <div
            v-for="order in orders.data"
            :key="order.id"
            class="bg-white rounded-[15px] pt-[18px] mb-[18px]"
          >
            <div class="px-[28px] mb-[35px]">
              <div class="flex justify-between mb-[18px]">
                <div>
                  <h1 class="text-[#000000] text-[16px] font-bold">
                    {{ order.service_type }}
                  </h1>
                </div>
                <div>
                  <h1 class="text-[#858585] text-[16px]">
                    Due {{ order.due_time }}
                  </h1>
                </div>
              </div>
              <div class="flex justify-between mb-[18px]">
                <div class="flex">
                  <div class="relative top-1 pr-[9.97px]">
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
                  <h1 class="text-[#24C6C9] text-[12px] font-bold">
                    {{ order.service_cost }}
                  </h1>
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
              </div>
            </div>
            <div
              @click="isOpen = !isOpen"
              class="flex justify-center bg-[#EDEDED] py-[8px] rounded-b-[15px]"
            >
              <img
                :class="{
                  'transform rotate-180': isOpen,
                }"
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

const isOpen = ref(false);
</script>