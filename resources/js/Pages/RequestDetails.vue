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
              <Link href="/home-provider"
                ><img class="w-[36px] h-[36px]" src="images/Back.png" alt=""
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
                <div class="flex">
                  <div class="rounded-full">
                    <img src="images/Ellipse 59.png" alt="" />
                  </div>
                  <div class="ml-[20px] w-full">
                    <div class="flex justify-between mb-[12px]">
                      <div>
                        <h1 class="text-[16px] font-bold">Zain Bergson</h1>
                      </div>
                    </div>
                    <div class="flex justify-between">
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
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="bg-white rounded-[15px] mt-[26px] px-[23px] py-[16px]"
              >
                <div>
                  <h1 class="text-[16px] font-bold mb-[24px]">Towing and Shipping</h1>
                </div>
                <div>
                  <h1 class="text-[14px] text-[#858585]">
                    Et donec at placerat orci tempus venenatis sagittis pretium.
                    Faucibus orci orci, nulla quis nisl. Vehicula felis nulla
                    est sem amet, vulputate. Mauris cras non consequat quis
                    montes, a. Iaculis ultrices morbi viverra purus vel augue
                    nec sed mollis. Dictumst augue vitae ut arcu, adipiscing.
                    Vitae viverra aliquam egestas porttitor integer lectus
                    volutpat, non integer. Nisl mattis nisl facilisis tincidunt
                    maecenas eleifend donec fames et. Elementum est, justo orci
                    dignissim pretium, mi posuere ac. Sed vel donec dolor ac
                    porttitor sit. Blandit turpis sagittis faucibus nibh mattis
                    posuere dignissim pretium, mi posuere ac. Sed vel donec
                    dolor ac porttitor sit. Blandit turpis sagittis faucibus
                    nibh mattis posuere
                  </h1>
                </div>
              </div>
              <div class="mt-[57px]">
                <FormButton><Link href="/send-offer">Send Offer</Link></FormButton>
              </div>
            </div>

            <div class="mt-[47px]">
              <div class="mb-[24px]">
                <img
                  class="w-[345px] h-[265px]"
                  src="images/Rectangle 67.png"
                  alt=""
                />
              </div>
              <div>
                <img
                  class="w-[345px] h-[265px]"
                  src="images/Rectangle 115.png"
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
</script>