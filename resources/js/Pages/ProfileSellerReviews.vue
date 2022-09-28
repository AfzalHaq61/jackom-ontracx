<template>
  <Head title="Profile Seller Reviews" />

  <div class="min-h-screen bg-gray-100 grid grid-cols-7">
    <!-- Home Left Index -->
    <SellerIndex />

    <div class="col-span-6 pl-[59px] pr-[115px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <div class="grid grid-cols-9 mt-[80px]">
        <div class="col-span-3 mr-[40px]">
          <div class="bg-white rounded-[20px] pt-[40px] pb-[30px]">
            <div>
              <div class="flex justify-center">
                <img src="images/Ellipse 15.png" alt="" />
              </div>
            </div>
            <div class="mt-[50px]">
              <div class="flex justify-center mb-[10px]">
                <img src="images/Group 145.png" alt="" />
              </div>
              <div class="text-center">
                <h1 class="text-[#24C6C9] text-[15px]">56% Completed</h1>
              </div>
            </div>
          </div>
          <div class="flex justify-end mt-[30px]">
            <button
              class="
                text-[#858585]
                bg-white
                text-[15px]
                border-2 border-[#858585]
                rounded-[4px]
                px-[10px]
                py-[10px]
              "
            >
              Remove This User
            </button>
          </div>
        </div>

        <div class="col-span-6 rounded-[20px] px-[40px] ml-[40px]">
          <div class="flex mb-[24px]">
            <div class="mr-5">
              <button
                class="bg-gray-100 text-[16px] rounded-[4px] px-[30px] py-[8px]"
              >
                <Link href="/profile-provider">General</Link>
              </button>
            </div>
            <div class="mr-5">
              <button
                class="bg-gray-100 text-[16px] rounded-[4px] px-[30px] py-[8px]"
              >
                <Link href="/profile-provider-other">Other</Link>
              </button>
            </div>
            <div class="mr-5">
              <button
                class="
                  bg-[#24C6C9]
                  text-white text-[16px]
                  rounded-[4px]
                  px-[30px]
                  py-[8px]
                "
              >
                <Link href="/profile-provider-reviews">Reviews</Link>
              </button>
            </div>
          </div>

          <div class="bg-white rounded-[10px] px-[15px] py-[15px]">
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51.png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (1).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (2).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (3).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (4).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (5).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (6).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (6).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
                </div>
              </div>
            </div>
            <div
              class="
                flex
                bg-[#F8F8F8]
                rounded-[12px]
                px-[10px]
                py-[10px]
                mb-[14px]
              "
            >
              <div class="mr-[18px]">
                <img
                  class="w-[38px] h-[38px]"
                  src="images/Ellipse 51 (7).png"
                  alt=""
                />
              </div>
              <div class="w-full">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px] font-bold">Leo Geidt</h1>
                  </div>
                  <div class="flex">
                    <div class="relative top-[2px]">
                      <img class="w-3 h-3" src="images/Star.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[12px] text-[#787878]">4.0</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#787878] text-[12px]">
                    Lorem ipsum dolar sit amit
                  </h1>
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