<template>
  <Head title="Home Seller" />

  <div class="min-h-screen bg-gray-100 grid grid-cols-7">
    <!-- Home Left Index -->
    <SellerIndex />

    <div class="col-span-6 pl-[59px] pr-[115px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <SellerHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div>
          <div class="flex justify-between text-sm mt-[32px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Overview</h1>
            </div>
            <div>
              <Link class="text-[16px] text-[#858585]" href="/allServices"
                >See All</Link
              >
            </div>
          </div>
          <div class="grid grid-cols-4">
            <div
              class="
                bg-white bg-gradient-to-b
                from-[#24C6C9]
                to-[#5FF6F9]
                rounded-[10px]
                w-[188px]
                h-[188px]
              "
            >
              <div>
                <h1 class="text-[14px] text-white pt-[14px] ml-[12px]">
                  New Users
                </h1>
              </div>
              <div class="flex justify-center h-full relative top-[40px]">
                <h1 class="font-bold text-[35px] text-white">21</h1>
              </div>
            </div>
            <div
              class="
                bg-white bg-gradient-to-b
                from-[#24C6C9]
                to-[#5FF6F9]
                rounded-[10px]
                w-[188px]
                h-[188px]
              "
            >
              <div>
                <h1 class="text-[14px] text-white pt-[14px] ml-[12px]">
                  All Users
                </h1>
              </div>
              <div class="flex justify-center h-full relative top-[40px]">
                <h1 class="font-bold text-[35px] text-white">12331</h1>
              </div>
            </div>
            <div
              class="
                bg-white bg-gradient-to-b
                from-[#24C6C9]
                to-[#5FF6F9]
                rounded-[10px]
                w-[188px]
                h-[188px]
              "
            >
              <div>
                <h1 class="text-[14px] text-white pt-[14px] ml-[12px]">
                  New Service Providers
                </h1>
              </div>
              <div class="flex justify-center h-full relative top-[40px]">
                <h1 class="font-bold text-[35px] text-white">12</h1>
              </div>
            </div>
            <div
              class="
                bg-white bg-gradient-to-b
                from-[#24C6C9]
                to-[#5FF6F9]
                rounded-[10px]
                w-[188px]
                h-[188px]
              "
            >
              <div>
                <h1 class="text-[14px] text-white pt-[14px] ml-[12px]">
                  All Service Providers
                </h1>
              </div>
              <div class="flex justify-center h-full relative top-[40px]">
                <h1 class="font-bold text-[35px] text-white">4123</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- Table -->
        <div class="mb-[22px]">
          <div class="flex justify-between text-sm mt-[55px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Recent Users</h1>
            </div>
            <div>
              <Link class="text-[16px] text-[#858585]" href="/allServices"
                >See All</Link
              >
            </div>
          </div>
          <div class="rounded-[18px] bg-white">
            <div class="grid grid-cols-5 rounded-tr-[18px] rounded-tl-[18px] py-[18px] px-[90px] bg-[#24C6C9]">
              <div class="">
                <h1 class="text-white text-[14px]">Name</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">City</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">Country</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px] ml-[14px]">Email</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]"></h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 61.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Wilson Bergson</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Interdum</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Arcu</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 62.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Wilson Bergson</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Interdum</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Arcu</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 64.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Leo Stanton</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Augue</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Leo</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 66.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Wilson Bergson</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Interdum</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Arcu</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-[22px]">
          <div class="flex justify-between text-sm mt-[55px] mb-[26px]">
            <div>
              <h1 class="text-[16px] font-bold">Recent Service Providers</h1>
            </div>
            <div>
              <Link class="text-[16px] text-[#858585]" href="/allServices"
                >See All</Link
              >
            </div>
          </div>
          <div class="rounded-[18px] bg-white">
            <div class="grid grid-cols-5 rounded-tr-[18px] rounded-tl-[18px] py-[18px] px-[90px] bg-[#24C6C9]">
              <div class="">
                <h1 class="text-white text-[14px]">Name</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">City</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">Country</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px] ml-[14px]">Email</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]"></h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 61.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Wilson Bergson</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Interdum</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Arcu</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 62.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Wilson Bergson</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Interdum</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Arcu</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 64.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Leo Stanton</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Augue</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Leo</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
              </div>
            </div>
            <div class="grid grid-cols-5 py-[18px] px-[18px]">
              <div class="flex">
                <div class="relative bottom-[5px] mr-[43px]">
                  <img src="images/Ellipse 66.png" alt="">
                </div>
                <div>
                  <h1 class="text-[14px]">Wilson Bergson</h1>
                </div>
              </div>
              <div class="ml-[43px]">
                <h1 class="text-[14px]">Interdum</h1>
              </div>
              <div class="ml-[14px]">
                <h1 class="text-[14px]">Arcu</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">lnelson@gmail.com</h1>
              </div>
              <div class="flex justify-end">
                <h1 class="text-[#24C6C9] text-[14px]">View</h1>
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