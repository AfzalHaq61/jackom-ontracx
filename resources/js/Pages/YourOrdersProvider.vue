<template>
  <Head title="Your Orders" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[20px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Orders -->
        <div>
          <div class="flex justify-between text-sm mt-[44px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Your Orders</h1>
            </div>
          </div>

          <div class="bg-white rounded-[15px] mb-[18px]">
            <div class="flex px-[10px] md:px-[18px] py-[12px]">
                <div class="rounded-full">
                  <img src="images/Ellipse17.png" alt="" />
                </div>
               <div class="ml-[20px] w-full">
                  <div class="flex justify-between mb-[12px]">
                    <div>
                      <h1 class="text-[16px] font-bold">User’s Name</h1>
                    </div>
                    <div>
                      <h1 class="text-[14px]">Cost</h1>
                    </div>
                    <div>
                      <h1 class="text-[16px] font-bold">Towing & Shipping</h1>
                    </div>
                  </div>
                  <div class="flex justify-between mb-[12px]">
                    <div class="flex">
                      <div class="relative top-1 mr-[5px]">
                        <img
                          class="w-[12px] h-[12px]"
                          src="images/location-pin.png"
                          alt=""
                        />
                      </div>
                      <div>
                        <h1 class="text-[14px] text-[#858585]">
                          Riyadh, Saudi Arabia
                        </h1>
                      </div>
                    </div>
                    <div>
                      <h1 class="text-[14px] text-[#24C6C9]">SAR 1221</h1>
                    </div>
                    <div>
                      <h1 class="text-[14px] text-[#858585]">Due 11:00 AM 12 June, 2022</h1>
                    </div>
                  </div>
                  <div>
                    
                  </div>
            </div>
            </div>
            <div>
              <div
                class="flex justify-center bg-[#EDEDED] py-[8px] rounded-b-[15px]"
              >
                <img
                  class="w-[10.24px h-[17.5px]]"
                  src="images/chevronbottom.png"
                  alt="chevronbottom"
                />
              </div>
            </div>
          </div>

          <div class="bg-white rounded-[15px] pt-[18px] mb-[18px]">
            <div class="px-[10px] mb-[35px]">
               <div class="flex">
                <div class="rounded-full">
                  <img src="images/Ellipse17.png" alt="" />
                </div>
               <div class="ml-[20px] w-full">
                  <div class="flex justify-between mb-[12px]">
                    <div>
                      <h1 class="text-[16px] font-bold">User’s Name</h1>
                    </div>
                    <div>
                      <h1 class="text-[14px]">Cost</h1>
                    </div>
                    <div>
                      <h1 class="text-[16px] font-bold">Towing & Shipping</h1>
                    </div>
                  </div>
                  <div class="flex justify-between mb-[12px]">
                    <div class="flex">
                      <div class="relative top-1 mr-[5px]">
                        <img
                          class="w-[12px] h-[12px]"
                          src="images/location-pin.png"
                          alt=""
                        />
                      </div>
                      <div>
                        <h1 class="text-[14px] text-[#858585]">
                          Riyadh, Saudi Arabia
                        </h1>
                      </div>
                    </div>
                    <div>
                      <h1 class="text-[14px] text-[#24C6C9]">SAR 1221</h1>
                    </div>
                    <div>
                      <h1 class="text-[14px] text-[#858585]">Due 11:00 AM 12 June, 2022</h1>
                    </div>
                  </div>
                  <div>
                    
                  </div>
            </div>
            </div>
              <div class="px-[10px] mt-[22px]">
                <div>
                  <h1 class="text-[#000000] text-[14px] font-bold">Requirments</h1>
                </div>
                <div class="mt-[10px]">
                  <h1 class="text-[#858585] text-[14px] leading-[17px]">Semper consectetur vestibulum, eu auctor cras maecenas pellentesque. Consectetur rhoncus pharetra nunc nulla neque,
                     habitant bibendum ac praesent. Rutrum nec dictum massa nisl sem morbi ultrices id pretium. Pellentesque imperdiet inter
                  </h1>
                </div>
              </div>
              <div class="px-[10px] mt-[22px]">
                <div>
                  <h1 class="text-[#000000] text-[14px] font-bold">Offer</h1>
                </div>
                <div class="mt-[10px]">
                  <h1 class="text-[#858585] text-[14px] leading-[17px]">Semper consectetur vestibulum, eu auctor cras maecenas pellentesque. Consectetur rhoncus pharetra nunc nulla neque,
                     habitant bibendum ac praesent. Rutrum nec dictum massa nisl sem morbi ultrices id pretium. Pellentesque imperdiet inter
                  </h1>
                </div>
              </div>
              <div class="flex justify-end mt-[40px]">
                <button class="border-2 border-[#24C6C9] text-[#24C6C9] rounded-lg py-2 px-4">Mark Completed</button>
              </div>
            <div>
            </div>
            </div>
            <div
              class="flex justify-center bg-[#EDEDED] py-[8px] rounded-b-[15px]"
            >
              <img
                class="w-[10.24px h-[17.5px]]"
                src="images/chevronbottom.png"
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
</script>