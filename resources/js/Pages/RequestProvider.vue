<template>
  <Head title="Provider Request" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Orders -->
        <div class="mb-[22px]">
          <div class="flex justify-between text-sm mt-[55px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">
                Services in Riyadh, Saudi Arabia
              </h1>
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
                  Semper id in erat quam dui. Condimentum nascetur sed placerat
                  eget felis placerat non id. Tempus sit gravida et duis risus.
                  Viverra faucibus risus at nec. Tellus leo in risus semper.
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
      </div>
    </div>
  </div>
</template>

<script setup>
</script>