<template>
  <Head title="Wallet" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="md:grid grid-cols-9">
          <div class="col-span-4 mt-[20px] md:mr-[60px]">
            <div>
              <h1 class="text-[16px] font-bold">Balance</h1>
            </div>
            <div>
              <div class="mt-[33px]">
                <h1 class="font-bold text-[52px] text-[#24C6C9]">SAR 11,231</h1>
              </div>
              <div class="flex justify-between mt-[34px]">
                <div class="bg-[#24C6C9] rounded-[5px] py-[10px] px-[30px]">
                  <button><h1 class="text-white">Top Up</h1></button>
                </div>
                <div class="flex items-center">
                  <h1 class="text-[#24C6C9] text-[20px]">Withdraw</h1>
                </div>
              </div>
            </div>

            <div class="mt-[22px]">
              <div class="mb-[16px]">
                <h1 class="text-[16px] font-bold">Cards</h1>
              </div>
              <div>
                <div
                  class="
                    border-2 border-[#24C6C9]
                    rounded-[12px]
                    p-[30px]
                    mb-[20px]
                  "
                >
                  <div class="flex justify-between">
                    <div>
                      <img src="images/path3789.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[#858585] text-[16px]">Debit</h1>
                    </div>
                  </div>
                  <div class="mt-[120px]">
                    <h1 class="text-[16px]">1111 2222 3333 4444</h1>
                  </div>
                </div>
                <div
                  class="
                    border-2 border-[#24C6C9]
                    rounded-[12px]
                    p-[30px]
                    mb-[20px]
                  "
                >
                  <div class="flex justify-between">
                    <div>
                      <img src="images/Group.png" alt="" />
                    </div>
                    <div>
                      <h1 class="text-[#858585] text-[16px]">Debit</h1>
                    </div>
                  </div>
                  <div class="mt-[120px]">
                    <h1 class="text-[16px]">1111 2222 3333 4444</h1>
                  </div>
                </div>
                <div
                  class="
                    border-2 border-dashed border-[#858585]
                    rounded-[12px]
                    p-[25px]
                    mb-[20px]
                  "
                >
                  <div class="flex place-content-center px-[140px] py-[70px]">
                    <img src="images/add-alt.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-5 mt-[70px]">
            <div>
              <h1 class="text-[16px] font-bold">Wallet Transactions</h1>
            </div>

            <div class="mt-[22px]">
              <div class="bg-white rounded-[10px] p-[30px] mb-[20px]">
                <div class="flex">
                  <div>
                    <img class="" src="images/minus-circle-line.png" alt="" />
                  </div>
                  <div class="flex">
                    <div class="w-[320px] pl-[28px]">
                      <div>
                        <h1 class="text-[20px]">Moj Shipping Service</h1>
                      </div>
                      <div class="flex mt-[8px]">
                        <div class="mr-[15px]">
                          <h1 class="text-[15px] text-[#858585]">12/02/2022</h1>
                        </div>
                        <div>
                          <h1 class="text-[15px] text-[#858585]">11:23 AM</h1>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <h1 class="text-[20px] text-[#B81818]">SAR 231</h1>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-[10px] p-[30px] mb-[20px]">
                <div class="flex">
                  <div>
                    <img src="images/minus-circle-line.png" alt="" />
                  </div>
                  <div class="flex">
                    <div class="w-[320px] pl-[28px]">
                      <div>
                        <h1 class="text-[20px]">Moj Shipping Service</h1>
                      </div>
                      <div class="flex mt-[8px]">
                        <div class="mr-[15px]">
                          <h1 class="text-[15px] text-[#858585]">12/02/2022</h1>
                        </div>
                        <div>
                          <h1 class="text-[15px] text-[#858585]">11:23 AM</h1>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <h1 class="text-[20px] text-[#B81818]">SAR 231</h1>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-[10px] p-[30px] mb-[20px]">
                <div class="flex">
                  <div>
                    <img src="images/minus-circle-line.png" alt="" />
                  </div>
                  <div class="flex">
                    <div class="w-[320px] pl-[28px]">
                      <div>
                        <h1 class="text-[20px]">Moj Shipping Service</h1>
                      </div>
                      <div class="flex mt-[8px]">
                        <div class="mr-[15px]">
                          <h1 class="text-[15px] text-[#858585]">12/02/2022</h1>
                        </div>
                        <div>
                          <h1 class="text-[15px] text-[#858585]">11:23 AM</h1>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <h1 class="text-[20px] text-[#B81818]">SAR 231</h1>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-[10px] p-[30px] mb-[20px]">
                <div class="flex mb-[20px]">
                  <div>
                    <img src="images/add-green-alt.png" alt="" />
                  </div>
                  <div class="flex">
                    <div class="w-[320px] pl-[28px]">
                      <div>
                        <h1 class="text-[20px]">Top Up</h1>
                      </div>
                      <div class="flex mt-[8px]">
                        <div class="mr-[15px]">
                          <h1 class="text-[15px] text-[#858585]">12/02/2022</h1>
                        </div>
                        <div>
                          <h1 class="text-[15px] text-[#858585]">11:23 AM</h1>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <h1 class="text-[20px] text-[#27BF36]">SAR 231</h1>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-[10px] p-[30px] mb-[20px]">
                <div class="flex">
                  <div>
                    <img src="images/minus-circle-line.png" alt="" />
                  </div>
                  <div class="flex">
                    <div class="w-[320px] pl-[28px]">
                      <div>
                        <h1 class="text-[20px]">Moj Shipping Service</h1>
                      </div>
                      <div class="flex mt-[8px]">
                        <div class="mr-[15px]">
                          <h1 class="text-[15px] text-[#858585]">12/02/2022</h1>
                        </div>
                        <div>
                          <h1 class="text-[15px] text-[#858585]">11:23 AM</h1>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <h1 class="text-[20px] text-[#B81818]">SAR 231</h1>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-[10px] p-[30px]">
                <div class="flex mb-[20px]">
                  <div>
                    <img src="images/add-green-alt.png" alt="" />
                  </div>
                  <div class="flex">
                    <div class="w-[320px] pl-[28px]">
                      <div>
                        <h1 class="text-[20px]">Top Up</h1>
                      </div>
                      <div class="flex mt-[8px]">
                        <div class="mr-[15px]">
                          <h1 class="text-[15px] text-[#858585]">12/02/2022</h1>
                        </div>
                        <div>
                          <h1 class="text-[15px] text-[#858585]">11:23 AM</h1>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <h1 class="text-[20px] text-[#27BF36]">SAR 231</h1>
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