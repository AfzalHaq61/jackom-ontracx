<template>
  <Head title="Home" />

  <div class="min-h-screen bg-gray-100 grid grid-cols-7">
    <!-- Home Left Index -->
    <SellerIndex />

    <div class="col-span-6 pl-[59px] pr-[115px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <SellerHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="mb-[44px]">
          <div class="flex justify-between text-sm mt-[32px] mb-[23px]">
            <div>
              <h1 class="text-[16px] font-bold">Orders</h1>
            </div>
          </div>
          <div class="flex">
            <div class="mr-5">
              <button
                class="
                  bg-white text-[16px]
                  rounded-[4px]
                  px-[30px]
                  py-[8px]
                "
              >
                <Link href="/orders-seller">Active</Link>
              </button>
            </div>
            <div class="mr-5">
              <button
                class="bg-white text-[16px] rounded-[4px] px-[30px] py-[8px]"
              >
                <Link href="/orders-seller-cancelled">Cancelled</Link>
              </button>
            </div>
            <div class="mr-5">
              <button
                class="bg-[#24C6C9]
                  text-white text-[16px] rounded-[4px] px-[30px] py-[8px]"
              >
                <Link href="/orders-seller-copmleted">Completed</Link>
              </button>
            </div>
          </div>
        </div>
        <!-- Table -->
        <div class="mb-[22px]">
          <div class="rounded-[18px] bg-white">
            <div
              class="
                grid grid-cols-6
                rounded-tr-[18px] rounded-tl-[18px]
                py-[18px]
                px-[27px]
                bg-[#24C6C9]
              "
            >
              <div class="">
                <h1 class="text-white text-[14px]">ID</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">Service Provider</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">User</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px] ml-[14px]">Date</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">Total Cost</h1>
              </div>
              <div class="">
                <h1 class="text-white text-[14px]">Due</h1>
              </div>
            </div>
            <div class="grid grid-cols-6 py-[18px] px-[22px]">
              <div>
                <h1 class="text-[14px]">34</h1>
              </div>
              <div>
                <h1 class="text-[14px]">Alfonso Carder</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">Terry Siphron</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">122 SAR</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
            </div>
            <div class="grid grid-cols-6 py-[18px] px-[22px]">
              <div>
                <h1 class="text-[14px]">34</h1>
              </div>
              <div>
                <h1 class="text-[14px]">Alfonso Carder</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">Terry Siphron</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">122 SAR</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
            </div>
            <div class="grid grid-cols-6 py-[18px] px-[22px]">
              <div>
                <h1 class="text-[14px]">34</h1>
              </div>
              <div>
                <h1 class="text-[14px]">Alfonso Carder</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">Terry Siphron</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">122 SAR</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
            </div>
            <div class="grid grid-cols-6 py-[18px] px-[22px]">
              <div>
                <h1 class="text-[14px]">34</h1>
              </div>
              <div>
                <h1 class="text-[14px]">Alfonso Carder</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">Terry Siphron</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">122 SAR</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
            </div>
            <div class="grid grid-cols-6 py-[18px] px-[22px]">
              <div>
                <h1 class="text-[14px]">34</h1>
              </div>
              <div>
                <h1 class="text-[14px]">Alfonso Carder</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">Terry Siphron</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">122 SAR</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
            </div>
            <div class="grid grid-cols-6 py-[18px] px-[22px]">
              <div>
                <h1 class="text-[14px]">34</h1>
              </div>
              <div>
                <h1 class="text-[14px]">Alfonso Carder</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">Terry Siphron</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">122 SAR</h1>
              </div>
              <div class="">
                <h1 class="text-[14px]">12 June, 2022</h1>
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