<template>
  <Head title="Your Orders" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Orders -->
        <div>
          <div class="flex justify-between text-sm mt-[44px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Sent Offers</h1>
            </div>
          </div>

          <div class="bg-white rounded-[15px] mb-[18px]">
            <div class="flex px-[18px] py-[12px]">
                <div class="rounded-full">
                  <img src="images/Ellipse17.png" alt="" />
                </div>
               <div class="ml-[20px] w-full">
                  <div class="flex justify-between mb-[12px]">
                    <div>
                      <h1 class="text-[16px] font-bold">User’s Name</h1>
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
            <div class="px-[28px] mb-[35px]">
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
                      <h1 class="text-[14px] text-[#858585]">Due 11:00 AM 12 June, 2022</h1>
                    </div>
                  </div>
                </div>
            </div>
              <div class="mt-[22px] ml-[78px]">
                <div>
                  <h1 class="text-[#000000] text-[16px] font-bold">Details</h1>
                </div>
                <div class="mt-[10px]">
                  <h1 class="text-[#858585] text-[14px] leading-[17px]">Dictumst pretium consectetur sit id posuere sit duis. Gravida euismod diam sed eu duis.
                    Dictumst pretium consectetur sit id posuere sit duis. Gravida euismod diam sed eu duis .Dictumst pretium consectetur sit id posuere sit duis. 
                    Gravida euismod diam sed eu duis .Dictumst pretium consectetur sit id posuere sit duis. 
                    Gravida euismod diam sed eu duis .Dictumst pretium consectetur sit id posuere sit duis. Gravida euismod diam sed eu duis .
                  </h1>
                </div>
              </div>
              <div class="md:grid grid-cols-3 mt-[26px] ml-[78px]">
                <div class="grid grid-cols-3">
                  <div>
                    <h1 class="text-[#858585] text-[14px]">Time</h1>
                  </div>
                  <div>
                    <h1 class="text-[#24C6C9] text-[14px]">02 Hrs</h1>
                  </div>
                  <div>
                    <img src="images/Line 12.png" alt="">
                  </div>
                </div>
                <div class="grid grid-cols-3">
                  <div>
                    <h1 class="text-[#858585] text-[14px]">Cost</h1>
                  </div>
                  <div>
                    <h1 class="text-[#24C6C9] text-[14px] font-bold">SAR 120</h1>
                  </div>
                  <div>
                    <img src="images/Line 12.png" alt="">
                  </div>
                </div>
                <div class="grid grid-cols-3">
                  <div>
                    <h1 class="underline text-[#24C6C9] text-[14px] font-bold">Edit</h1>
                  </div>
                  <div>
                    <h1 class="underline text-[#24C6C9] text-[14px] font-bold">Remove</h1>
                  </div>
                </div>
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

          <div class="bg-white rounded-[15px] mb-[18px]">
            <div class="flex px-[18px] py-[12px]">
                <div class="rounded-full">
                  <img src="images/Ellipse17.png" alt="" />
                </div>
               <div class="ml-[20px] w-full">
                  <div class="flex justify-between mb-[12px]">
                    <div>
                      <h1 class="text-[16px] font-bold">User’s Name</h1>
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

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>