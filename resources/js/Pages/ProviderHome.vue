<template>
  <Head title="Home Provider" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div>
          <div class="flex justify-between text-sm mt-[32px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Overview</h1>
            </div>
          </div>
          <div class="flex w-full overflow-x-auto pb-[10px]">
            <div
              class="
                grid
                bg-[#FFFFFF]
                px-[50px]
                w-[190px]
                h-[200px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-1">
                <div class="grid justify-center mb-5">
                  <h1 class="text-[14px] text-[#858585] w-[100px] pt-[14px] mb-[30px]">
                    Balance (SAR)
                  </h1>
                </div>
                <div>
                  <h1 class="font-bold text-[35px] text-[#24C6C9]">1234</h1>
                </div>
              </Link>
            </div>

            <div
              class="
                grid
                bg-[#FFFFFF]
                px-[50px]
                w-[190px]
                h-[200px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-1">
                <div class="grid justify-center mb-5">
                  <h1 class="text-[14px] text-[#858585] w-[100px] pt-[14px] mb-[30px]">
                    Pending Orders
                  </h1>
                </div>
                <div>
                  <h1 class="font-bold text-[35px] text-[#24C6C9]">03</h1>
                </div>
              </Link>
            </div>

            <div
              class="
                grid
                bg-[#FFFFFF]
                px-[50px]
                w-[190px]
                h-[200px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-1">
                <div class="grid justify-center mb-5">
                  <h1 class="text-[14px] text-[#858585] w-[100px] pt-[14px] mb-[30px]">
                    New Requests
                  </h1>
                </div>
                <div>
                  <h1 class="font-bold text-[35px] text-[#24C6C9]">12</h1>
                </div>
              </Link>
            </div>

            <div
              class="
                grid
                bg-[#FFFFFF]
                px-[50px]
                w-[190px]
                h-[200px]
                rounded-[10.84px]
                mr-[60px]
              "
            >
              <Link href="/request-Service-1">
                <div class="grid justify-center mb-5">
                  <h1 class="text-[14px] text-[#858585] w-[120px] pt-[14px] mb-[30px]">
                    Unread Messages
                  </h1>
                </div>
                <div>
                  <h1 class="font-bold text-[35px] text-[#24C6C9]">123</h1>
                </div>
              </Link>
            </div>

          </div>
        </div>
        <!-- Orders -->
        <div class="mb-[22px]">
          <div class="flex justify-between text-sm mt-[55px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">
                Services in Riyadh, Saudi Arabia
              </h1>
            </div>
            <div>
              <Link class="text-[16px] text-[#858585]" href="/request-provider"
                >See All</Link
              >
            </div>
          </div>

          <div class="mb-[20px]">
            <Link href="/request-details">
              <div class="bg-white rounded-[15px] p-[18px]">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[18px] font-bold">Oil Change</h1>
                  </div>
                  <div class="flex items-center">
                    <h1 class="text-[13px]">12-2-2022</h1>
                  </div>
                </div>
                <div class="flex mt-[6px]">
                  <div class="relative top-[4px] pr-[5px]">
                    <img
                      class="w-[12px] h-[12px]"
                      src="images/location-pin.png"
                      alt=""
                    />
                  </div>
                  <div>
                    <h1 class="text-[14px] text-[#858585]">
                      Specific Location, Riyadh, Saudi Arabia
                    </h1>
                  </div>
                </div>
                <div class="mt-[12px]">
                  <h1 class="text-[16px] text-[#858585]">
                    Semper id in erat quam dui. Condimentum nascetur sed
                    placerat eget felis placerat non id. Tempus sit gravida et
                    duis risus. Viverra faucibus risus at nec. Tellus leo in
                    risus semper.
                  </h1>
                </div>
                <div class="flex mt-[35px]">
                  <div class="mr-[20px]">
                    <img
                      class="rounded-[4px]"
                      src="images/Rectangle111.png"
                      alt=""
                    />
                  </div>
                  <div>
                    <img
                      class="rounded-[4px]"
                      src="images/Rectangle112.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="flex justify-end">
                  <button
                    class="
                      text-white
                      rounded-[6px]
                      text-[18px]
                      bg-[#24C6C9]
                      py-[10px]
                      px-[18px]
                    "
                  >
                    <Link href="/request-details">Details</Link>
                  </button>
                </div>
              </div>
            </Link>
          </div>

          <div>
            <Link href="/request-details">
              <div class="bg-white rounded-[15px] p-[18px]">
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[18px] font-bold">Oil Change</h1>
                  </div>
                  <div class="flex items-center">
                    <h1 class="text-[13px]">12-2-2022</h1>
                  </div>
                </div>
                <div class="flex mt-[6px]">
                  <div class="relative top-[4px] pr-[5px]">
                    <img
                      class="w-[12px] h-[12px]"
                      src="images/location-pin.png"
                      alt=""
                    />
                  </div>
                  <div>
                    <h1 class="text-[14px] text-[#858585]">
                      Specific Location, Riyadh, Saudi Arabia
                    </h1>
                  </div>
                </div>
                <div class="mt-[12px]">
                  <h1 class="text-[16px] text-[#858585]">
                    Semper id in erat quam dui. Condimentum nascetur sed
                    placerat eget felis placerat non id. Tempus sit gravida et
                    duis risus. Viverra faucibus risus at nec. Tellus leo in
                    risus semper.
                  </h1>
                </div>
                <div class="flex mt-[35px]">
                  <div class="mr-[20px]">
                    <img
                      class="rounded-[4px]"
                      src="images/Rectangle111.png"
                      alt=""
                    />
                  </div>
                  <div>
                    <img
                      class="rounded-[4px]"
                      src="images/Rectangle112.png"
                      alt=""
                    />
                  </div>
                </div>
                <div class="flex justify-end">
                  <button
                    class="
                      text-white
                      rounded-[6px]
                      text-[18px]
                      bg-[#24C6C9]
                      py-[10px]
                      px-[18px]
                    "
                  >
                    <Link href="/request-details">Details</Link>
                  </button>
                </div>
              </div>
            </Link>
          </div>
        </div>

        <div class="flex justify-between text-sm mt-[55px] mb-[26px]">
          <div>
            <h1 class="text-[16px] font-bold">
              Services in Riyadh, Saudi Arabia
            </h1>
          </div>
          <div>
            <Link class="text-[16px] text-[#858585]" href="/wrecked_cars_list"
              >See All</Link
            >
          </div>
        </div>

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
      </div>
    </div>
  </div>
</template>

<script setup>
</script>