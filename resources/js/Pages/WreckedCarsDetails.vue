<template>
  <Head title="Wrecked Cars Details" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div class="mt-[40px]">
        <!-- Heading -->
        <div class="mb-[26px]">
          <div class="flex">
            <div>
              <div class="relative bottom-[5px] mr-[15px]">
                <Link href="/wrecked_cars_list"
                  ><img class="w-[36px] h-[36px]" src="images/Back.png" alt=""
                /></Link>
              </div>
            </div>
            <div>
              <h1 class="text-[16px] font-bold">Details</h1>
            </div>
          </div>
        </div>
        <!-- Orders -->
        <div class="md:grid grid-cols-9">
          <div class="col-span-7 mb-[20px]">
            <div>
              <div>
                <img src="images/Rectangle 223.png" alt="" />
              </div>
            </div>
            <div class="flex mt-[24px]">
              <div class="mr-[24px]">
                <img src="images/Rectangle 224.png" alt="" />
              </div>
              <div class="mr-[24px]">
                <img src="images/Rectangle 225.png" alt="" />
              </div>
              <div class="mr-[24px]">
                <img src="images/Rectangle 225.png" alt="" />
              </div>
            </div>
          </div>
          <div class="col-span-2">
            <div>
              <div>
                <div class="">
                  <div>
                    <h1 class="text-[18px] font-bold">Audi R8i</h1>
                  </div>
                  <div class="mt-[16px]">
                    <div class="flex mt-[10px]">
                      <div class="relative top-[4px] pr-[5px]">
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
                    <div class="mt-[30px]">
                      <h1 class="text-[24px] text-[#24C6C9]">
                        <span class="font-bold">32132</span> SAR
                      </h1>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 mt-[34px]">
                  <div class="mr-[20px]">
                    <button
                      class="
                        text-[16px]
                        bg-white
                        rounded-[2px]
                        px-[10px]
                        py-[5px]
                      "
                    >
                      2018
                    </button>
                  </div>
                  <div class="mr-[20px]">
                    <button
                      class="
                        text-[16px]
                        bg-white
                        rounded-[2px]
                        px-[10px]
                        py-[5px]
                      "
                    >
                      Automatic
                    </button>
                  </div>
                </div>
                <div class="mt-[18px]">
                  <button
                    class="
                      text-[16px]
                      bg-white
                      rounded-[2px]
                      px-[10px]
                      py-[5px]
                    "
                  >
                    Hybrid Plug-in
                  </button>
                </div>
                <div class="mt-[34px]">
                  <div>
                    <button
                      class="
                        bg-[#24C6C9]
                        text-white
                        rounded-[6px]
                        px-[18px]
                        py-[10px]
                      "
                    >
                      <div class="flex">
                        <h1 class="mr-[25px] text-[18px]">032124xxxx</h1>
                        <h1 class="pt-[5px] text-[12px] w-[100px] underline">
                          Show Number
                        </h1>
                      </div>
                    </button>
                  </div>
                  <div class="mt-[34px]">
                    <button
                      class="
                        text-[18px]
                        bg-[#24C6C9]
                        text-white
                        rounded-[6px]
                        px-[18px]
                        py-[10px]
                      "
                    >
                      <Link href="/chat-provider">Message</Link>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-[5px] py-[17px] px-[26px] mt-[100px]">
              <div>
                <h1 class="font-bold text-[24px]">Details</h1>
              </div>
              <div>
                <div class="md:grid grid-cols-2">
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Type</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">Audi</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Category</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">Sedan</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">
                        Manufacturing Year
                      </h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">2016</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Paint</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">No</h1>
                    </div>
                  </div>
                </div>
                <div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">
                        Regional Specification
                      </h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">Specs</h1>
                    </div>
                  </div>
                </div>
                <div class="md:grid grid-cols-2">
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Chasis Case</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">23123</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Kilometer</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">321</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Color</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">Red</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Fuel Type</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">Electric</h1>
                    </div>
                  </div>
                  <div
                    class="
                      flex
                      justify-between
                      bg-[#F8F8F8]
                      rounded-[10px]
                      h-min
                      mr-[30px]
                      mb-[20px]
                      py-[10px]
                      px-[20px]
                    "
                  >
                    <div>
                      <h1 class="text-[#3A3A3A] text-[15px]">Transmmission</h1>
                    </div>
                    <div>
                      <h1 class="font-bold text-[15px]">Automatic</h1>
                    </div>
                  </div>
                </div>
                <div
                  class="
                    bg-[#F8F8F8]
                    rounded-[10px]
                    h-min
                    mr-[30px]
                    mb-[20px]
                    py-[10px]
                    px-[20px]
                  "
                >
                  <div>
                    <h1 class="font-bold text-[15px]">Description</h1>
                  </div>
                  <div>
                    <h1 class="text-[#858585] text-[14px]">
                      Semper consectetur vestibulum, eu auctor cras maecenas
                      pellentesque. Consectetur rhoncus pharetra nunc nulla
                      neque, habitant bibendum ac praesent. Rutrum nec dictum
                      massa nisl sem morbi ultrices id pretium. Pellentesque
                      imperdiet inter
                    </h1>
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