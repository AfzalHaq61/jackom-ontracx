<template>
  <Head title="Home" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
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
              <Link class="text-[16px] text-[#858585]" href="/all-services"
                >See All</Link
              >
            </div>
          </div>

          <div class="flex w-full overflow-x-auto pb-[10px]">
            <div
              class="
                grid
                place-content-center
                bg-[#FFFFFF]
                px-[50px]
                w-[190px]
                h-[221px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-1">
                <div class="grid place-content-center mb-5">
                  <img class="w-[100px]" src="images/towing.png" alt="Towing Shipping image" />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">Towing Shipping</h1>
                </div>
              </Link>
            </div>

            <div
              class="
                grid
                place-content-center
                bg-[#FFFFFF]
                px-[50px]
                w-[188.48px]
                h-[221px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-2">
                <div class="grid place-content-center mb-5">
                  <img class="w-[100px]" src="images/Group 156.png" alt="Car Wash and Home Repair Image" />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">Car Wash & <br> Repairing</h1>
                </div>
              </Link>
            </div>

            <div
              class="
                grid
                place-content-center
                bg-[#FFFFFF]
                px-[50px]
                w-[188.48px]
                h-[221px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-7">
                <div class="grid place-content-center mb-5">
                  <img src="images/Sparepart.png" alt="Spare Parts Image" />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">Spare Parts</h1>
                </div>
              </Link>
            </div>

            <div
              class="
                grid
                place-content-center
                bg-[#FFFFFF]
                px-[50px]
                w-[188.48px]
                h-[221px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-4,5">
                <div class="grid place-content-center mb-5">
                  <img class="w-[100px]" src="images/bagging.png" alt="Deportation And Buggage Image" />
                </div>
                <div>
                  <h1 class="text-[#858585] text-center w-[150px]">Deportation And Buggage <br>Transfer</h1>
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
              <Link href="/your-orders">See All</Link>
            </div>
          </div>

          <div class="bg-white rounded-[15px] pt-[18px] mb-[18px]">
            <div class="px-[28px]">
              <div class="flex justify-between mb-[18px]">
                <div>
                  <h1 class="text-[#000000] text-[16px] font-bold">
                    Oil Change
                  </h1>
                </div>
                <div>
                  <h1 class="text-[#858585] text-[16px]">Due 12 June 2022</h1>
                </div>
              </div>
              <div class="flex justify-between mb-[18px]">
                <div class="flex">
                  <div class="relative top-[4px] pr-[9.97px]">
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
                  <h1 class="text-[#24C6C9] text-[12px] font-bold">SAR 122</h1>
                </div>
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

          <div class="bg-white rounded-[15px] pt-[18px] mb-[18px]">
            <div class="px-[28px]">
              <div class="flex justify-between mb-[18px]">
                <div>
                  <h1 class="text-[#000000] text-[16px] font-bold">
                    Oil Change
                  </h1>
                </div>
                <div>
                  <h1 class="text-[#858585] text-[16px]">Due 12 June 2022</h1>
                </div>
              </div>
              <div class="flex justify-between mb-[18px]">
                <div class="flex">
                  <div class="relative top-[4px] pr-[9.97px]">
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
                  <h1 class="text-[#24C6C9] text-[12px] font-bold">SAR 122</h1>
                </div>
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

          <div class="bg-white rounded-[15px] pt-[18px] mb-[18px]">
            <div class="px-[28px]">
              <div class="flex justify-between mb-[18px]">
                <div>
                  <h1 class="text-[#000000] text-[16px] font-bold">
                    Oil Change
                  </h1>
                </div>
                <div>
                  <h1 class="text-[#858585] text-[16px]">Due 12 June 2022</h1>
                </div>
              </div>
              <div class="flex justify-between mb-[18px]">
                <div class="flex">
                  <div class="relative top-[4px] mr-[10px]">
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
                  <h1 class="text-[#24C6C9] text-[12px] font-bold">SAR 122</h1>
                </div>
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