<template>
  <Head title="Provider Profile" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="md:grid grid-cols-2">
          <div class="md:pr-[55px]">
            <div
              class="
                flex
                justify-between
                text-sm
                mt-[44px]
                mb-[26px]
                md:mr-[115px]
              "
            >
              <div class="flex">
                <div>
                  <div class="relative bottom-[7px] mr-[15px]">
                    <Link href="/signin"
                      ><img
                        class="w-[36px] h-[36px]"
                        src="images/Back.png"
                        alt=""
                    /></Link>
                  </div>
                </div>
                <div>
                <h1 class="text-[16px] font-bold">Provider Details</h1>
              </div>
              </div>
            </div>

            <div class="bg-white rounded-[26px]">
              <div class="">
                <img class="w-full" src="images/Rectangle 123.png" alt="" />
              </div>

              <div class="p-[35px]">
                <div class="relative bottom-[20px] flex">
                  <div
                    class="
                      relative
                      bottom-[45px]
                      border-4 border-white
                      rounded-full
                    "
                  >
                    <img
                      class="w-[100px] h-[100px]"
                      src="images/Ellipse17.png"
                      alt=""
                    />
                  </div>
                  <div class="ml-[20px]">
                    <div class="mb-[12px]">
                      <h1 class="text-[16px] font-bold">Muhammad Usama</h1>
                    </div>
                    <div>
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

                <div>
                  <div class="mb-[8px]">
                    <h1 class="text-[16px] font-bold">About Seller</h1>
                  </div>
                  <div>
                    <h1 class="text-[#858585] leading-[17px] text-justify">
                      Et donec at placerat orci tempus venenatis sagittis
                      pretium. Faucibus orci orci, nulla quis nisl. Vehicula
                      felis nulla est sem amet, vulputate. Mauris cras non
                      consequat quis montes, a. Iaculis ultrices morbi viverra
                      purus vel augue nec sed mollis. Dictumst augue vitae ut
                      arcu, adipiscing. Vitae viverra aliquam egestas porttitor
                      integer lectus volutpat, non integer. Nisl mattis nisl
                      facilisis tincidunt maecenas eleifend donec fames et.
                      Elementum est, justo orci dignissim pretium, mi posuere
                      ac. Sed vel donec dolor ac porttitor sit. Blandit turpis
                      sagittis faucibus nibh mattis posuere dignissim pretium,
                      mi posuere ac. Sed vel donec dolor ac porttitor sit.
                      Blandit turpis sagittis faucibus nibh mattis posuere
                    </h1>
                  </div>
                </div>

                <div>
                  <div class="mt-[25px] mb-[45px]">
                    <div class="flex justify-between mb-[20px]">
                      <div class="mr-[70px]">
                        <h1 class="text-[#858585] text-[14px]">Time</h1>
                      </div>
                      <div>
                        <h1 class="font-bold text-[#24C6C9] text-[14px]">
                          02 Hrs
                        </h1>
                      </div>
                    </div>
                    <div class="flex justify-between">
                      <div class="mr-[70px]">
                        <h1 class="text-[#858585] text-[14px]">Cost</h1>
                      </div>
                      <div>
                        <h1 class="font-bold text-[#24C6C9] text-[14px]">
                          Sar 128
                        </h1>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex justify-center">
                  <div class="mr-[16px]">
                    <div
                      class="
                        flex
                        justify-center
                        bg-white
                        text-[#24C6C9]
                        border-2 border-[#24C6C9]
                        rounded-lg
                        text-[14px]
                        py-2
                        px-[31px]
                        w-max
                      "
                    >
                      <button><Link href="/chat">Send Messege</Link></button>
                    </div>
                  </div>
                  <div>
                    <div
                      class="
                        flex
                        justify-center
                        bg-[#24C6C9]
                        text-white
                        rounded-lg
                        border-2 border-[#24C6C9]
                        text-[14px]
                        py-2
                        px-[31px]
                        w-max
                      "
                    >
                      <button><Link href="/your-orders">Start Order</Link></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-[90px]">
            <div>
              <div class="bg-white p-[30px] rounded-[26px]">
                <div class="mb-[8px]">
                  <h1 class="text-[16px] font-bold">Offer Details</h1>
                </div>
                <div>
                  <h1 class="text-[#858585] leading-[17px] text-justify">
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
            </div>

            <div class="mt-[22px]">
              <div class="bg-white rounded-[26px] p-[30px]">
                <div class="flex">
                  <div class="mr-[30px]">
                    <img src="images/Group 30.png" alt="" />
                  </div>
                  <div class="flex items-center mr-[10px]">
                    <div class="mr-[10px]">
                      <h1 class="font-bold text-[16px]">4.5</h1>
                    </div>
                    <div>
                      <h1 class="text-[16px] text-[#858585]">12 Reviews</h1>
                    </div>
                  </div>
                </div>
                <div class="mt-[13px]">
                  <div class="flex p-[10px]">
                    <div class="mr-[20px]">
                      <img src="images/Ellipse 16.png" alt="" />
                    </div>
                    <div>
                      <div class="flex justify-between">
                        <div>
                          <h1 class="text-[14px]">Lincoln Siphron</h1>
                        </div>
                        <div class="flex">
                          <div class="relative top-[4px] mr-[1px]">
                            <img
                              class="w-[12px] h-[12px]"
                              src="images/Star.png"
                              alt=""
                            />
                          </div>
                          <div>
                            <h1 class="text-[14px] text-[#7C7C7C]">4.8</h1>
                          </div>
                        </div>
                      </div>
                      <div class="pr-[100px]">
                        <h1 class="text-[#858585] text-[12px]">
                          Imperdiet mus egestas porttitor eleifend pellentesque
                          molestie
                          <span class="text-[#24C6C9]">See more...</span>
                        </h1>
                      </div>
                    </div>
                  </div>

                  <div class="flex p-[10px]">
                    <div class="mr-[20px]">
                      <img src="images/Ellipse 16.png" alt="" />
                    </div>
                    <div>
                      <div class="flex justify-between">
                        <div>
                          <h1 class="text-[14px]">Lincoln Siphron</h1>
                        </div>
                        <div class="flex">
                          <div class="relative top-[4px] mr-[1px]">
                            <img
                              class="w-[12px] h-[12px]"
                              src="images/Star.png"
                              alt=""
                            />
                          </div>
                          <div>
                            <h1 class="text-[14px] text-[#7C7C7C]">4.8</h1>
                          </div>
                        </div>
                      </div>
                      <div class="pr-[100px]">
                        <h1 class="text-[#858585] text-[12px]">
                          Imperdiet mus egestas porttitor eleifend pellentesque
                          molestie
                          <span class="text-[#24C6C9]">See more...</span>
                        </h1>
                      </div>
                    </div>
                  </div>

                  <div class="flex p-[10px]">
                    <div class="mr-[20px]">
                      <img src="images/Ellipse 16.png" alt="" />
                    </div>
                    <div>
                      <div class="flex justify-between">
                        <div>
                          <h1 class="text-[14px]">Lincoln Siphron</h1>
                        </div>
                        <div class="flex">
                          <div class="relative top-[4px] mr-[1px]">
                            <img
                              class="w-[12px] h-[12px]"
                              src="images/Star.png"
                              alt=""
                            />
                          </div>
                          <div>
                            <h1 class="text-[14px] text-[#7C7C7C]">4.8</h1>
                          </div>
                        </div>
                      </div>
                      <div class="pr-[100px]">
                        <h1 class="text-[#858585] text-[12px]">
                          Imperdiet mus egestas porttitor eleifend pellentesque
                          molestie
                          <span class="text-[#24C6C9]">See more...</span>
                        </h1>
                      </div>
                    </div>
                  </div>

                  <div class="flex p-[10px]">
                    <div class="mr-[20px]">
                      <img src="images/Ellipse 16.png" alt="" />
                    </div>
                    <div>
                      <div class="flex justify-between">
                        <div>
                          <h1 class="text-[14px]">Lincoln Siphron</h1>
                        </div>
                        <div class="flex">
                          <div class="relative top-[4px] mr-[1px]">
                            <img
                              class="w-[12px] h-[12px]"
                              src="images/Star.png"
                              alt=""
                            />
                          </div>
                          <div>
                            <h1 class="text-[14px] text-[#7C7C7C]">4.8</h1>
                          </div>
                        </div>
                      </div>
                      <div class="pr-[100px]">
                        <h1 class="text-[#858585] text-[12px]">
                          Imperdiet mus egestas porttitor eleifend pellentesque
                          molestie
                          <span class="text-[#24C6C9]">See more...</span>
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
    </div>
  </div>
</template>

<script setup>
</script>