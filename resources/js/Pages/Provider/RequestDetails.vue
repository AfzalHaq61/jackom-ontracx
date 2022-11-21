<template>
  <Head title="Request Details" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 pl-[59px] pr-[30px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="mt-[10px]">
          <div class="flex">
            <div class="relative bottom-[5px] mr-[15px]">
              <Link :href="
                      route('provider.request')"
                ><img class="w-[36px] h-[36px]" src="/images/Back.png" alt=""
              /></Link>
            </div>
            <div>
              <h1 class="text-[16px] font-bold">Details</h1>
            </div>
          </div>
          <div class="md:grid grid-cols-3 gap-[37px]">
            <div class="col-span-2">
              <div
                class="bg-white rounded-[15px] mt-[46px] px-[23px] py-[16px]"
              >
                <div v-for="user_data in user.data" :key="user_data.uuid" class="flex">
                  <div class="rounded-full">
                    <img class="w-[50px] h-[50px]" :src="'/images/' + user_data.upload_photo" alt="" />
                  </div>
                  <div class="ml-[20px] w-full">
                    <div class="flex justify-between mb-[12px]">
                      <div>
                        <h1 class="text-[16px] font-bold">{{ user_data.name }}</h1>
                      </div>
                    </div>
                    <div class="flex justify-between">
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
                            {{ user_data.location }} Riyadh, Saudi Arabia
                          </h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div
                  class="bg-white rounded-[15px] mt-[26px] px-[23px] py-[16px]"
                >
                  <div>
                    <h1 class="text-[16px] font-bold mb-[24px]">
                      {{ request.service_type }}
                    </h1>
                  </div>
                  <div>
                    <h1 class="text-[14px] text-[#858585]">
                      {{ request.description }}
                    </h1>
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
                    mt-[57px]
                  "
                >
                  <button><Link :href="
                      route('provider.offer.create', {
                        request: request.uuid,
                      })
                    ">Send Offer</Link></button>
                </div>
              </div>
            </div>

            <div class="mt-[47px]">
              <div class="mb-[24px]">
                <img
                  class="w-[345px] h-[265px] rounded-[10px]"
                  :src="'/images/' + request.upload_photo"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  request: Array,
  user: Object
});
</script>