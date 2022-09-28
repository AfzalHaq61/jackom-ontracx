<template>
  <Head title="Wrecked Cars List" />

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
          <div>
            <h1 class="text-[20px] font-bold">Cars for Sale</h1>
          </div>
        </div>
        <!-- Orders -->
        <div class="bg-white rounded-[15px] mb-[22px] p-[18px]">
          <Link href="/wrecked_cars_details">
            <div class="md:flex">
              <div class="mb-[20px]">
                <img class="w-full" src="images/Rectangle 217.png" alt="" />
              </div>

              <div class="md:ml-[40px] w-full">
                <div class="">
                  <div class="flex justify-between">
                    <div>
                      <h1 class="text-[18px] font-bold">Audi R8i</h1>
                    </div>
                    <div>
                      <h1 class="text-[24px] text-[#24C6C9] font-bold">
                        32132 SAR
                      </h1>
                    </div>
                  </div>
                  <div>
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
                  </div>
                </div>
                <div class="flex mt-[25px]">
                  <div class="mr-[20px]">
                    <button
                      class="
                        text-[16px]
                        bg-[#F8F8F8]
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
                        bg-[#F8F8F8]
                        rounded-[2px]
                        px-[10px]
                        py-[5px]
                      "
                    >
                      Automatic
                    </button>
                  </div>
                  <div class="mr-[20px]">
                    <button
                      class="
                        text-[16px]
                        bg-[#F8F8F8]
                        rounded-[2px]
                        px-[10px]
                        py-[5px]
                      "
                    >
                      Hybrid Plug-in
                    </button>
                  </div>
                </div>
                <div class="flex mt-[30px]">
                  <div class="mr-[30px]">
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
                  <div>
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
                      <div class="md:flex">
                        <h1 class="md:mr-[25px]">032124xxxx</h1>
                        <div class="w-fit">
                          <h1 class="underline">Show Number</h1>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </Link>
        </div>

        <div class="bg-white rounded-[15px] mb-[22px] p-[18px]">
          <Link href="/wrecked_cars_details">
            <div class="md:flex">
              <div class="mb-[20px]">
                <img class="w-full" src="images/Rectangle 219.png" alt="" />
              </div>

              <div class="md:ml-[40px] w-full">
                <div class="">
                  <div class="flex justify-between">
                    <div>
                      <h1 class="text-[18px] font-bold">Audi R8i</h1>
                    </div>
                    <div>
                      <h1 class="text-[24px] text-[#24C6C9] font-bold">
                        32132 SAR
                      </h1>
                    </div>
                  </div>
                  <div>
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
                  </div>
                </div>
                <div class="flex mt-[25px]">
                  <div class="mr-[20px]">
                    <button
                      class="
                        text-[16px]
                        bg-[#F8F8F8]
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
                        bg-[#F8F8F8]
                        rounded-[2px]
                        px-[10px]
                        py-[5px]
                      "
                    >
                      Automatic
                    </button>
                  </div>
                  <div class="mr-[20px]">
                    <button
                      class="
                        text-[16px]
                        bg-[#F8F8F8]
                        rounded-[2px]
                        px-[10px]
                        py-[5px]
                      "
                    >
                      Hybrid Plug-in
                    </button>
                  </div>
                </div>
                <div class="flex mt-[30px]">
                  <div class="mr-[30px]">
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
                  <div>
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
                      <div class="md:flex">
                        <h1 class="mr-[25px]">032124xxxx</h1>
                        <div class="w-fit">
                          <h1 class="underline">Show Number</h1>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>