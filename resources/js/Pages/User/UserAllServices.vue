<template>
  <Head title="All Services" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div>
          <div
            class="flex justify-between text-sm mt-[44px] mb-[26px] mr-[115px]"
          >
            <div class="flex">
              <div class="relative bottom-[10px] mr-[15px]">
                <Link href="/home"
                  ><img class="w-[36px] h-[36px]" src="/images/Back.png" alt=""
                /></Link>
              </div>
              <h1 class="text-[16px] font-bold">All Services</h1>
              <div></div>
            </div>
          </div>

          <div class="grid justify-center md:grid-cols-3">
            <div
              class="
                bg-[#FFFFFF]
                w-[287px]
                h-[350px]
                rounded-[10.84px]
                md:mr-[30px]
                mb-[30px]
                pt-[60px]
              "
            >
              <Link :href="route('user.request-service.one.create')">
                <div class="grid place-content-center mb-[20px]">
                  <img
                    class="w-[150px]"
                    src="/images/towing and shipping.png"
                    alt="Towing and Sipping Image"
                  />
                </div>
                <div class="text-center">
                  <div>
                    <h1 class="text-[17.23px] font-bold mb-[17.38px]">
                      Towing and Shipping
                    </h1>
                  </div>
                  <div class="flex justify-center">
                    <h1
                      class="
                        text-[#858585] text-[14px]
                        w-[172px]
                        leading-[17.07px]
                      "
                    >
                      This include the services related to the oil change
                    </h1>
                  </div>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                w-[287px]
                h-[350px]
                rounded-[10.84px]
                md:mr-[30px]
                mb-[30px]
                pt-[60px]
              "
            >
              <Link :href="route('user.request-service.two.create')">
                <div class="grid place-content-center mb-[20px]">
                  <img
                    class="w-[150px]"
                    src="/images/car maintenance and care.png"
                    alt="Car Wash and Repair Image"
                  />
                </div>
                <div class="text-center">
                  <div>
                    <h1 class="text-[17.23px] font-bold mb-[17.38px]">
                      Car Maintenance and Care
                    </h1>
                  </div>
                  <div class="flex justify-center">
                    <h1
                      class="
                        text-[#858585] text-[14px]
                        w-[172px]
                        leading-[17.07px]
                      "
                    >
                      This include the services related to the oil change
                    </h1>
                  </div>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                w-[287px]
                h-[350px]
                rounded-[10.84px]
                md:mr-[30px]
                mb-[30px]
                pt-[60px]
              "
            >
              <Link :href="route('user.request-service.three.create')">
                <div class="grid place-content-center mb-[20px]">
                  <img
                    class="w-[150px]"
                    src="/images/spare parts.png"
                    alt="Spare Parts Image"
                  />
                </div>
                <div class="text-center">
                  <div>
                    <h1 class="text-[17.23px] font-bold mb-[17.38px]">
                      Spare Parts Request
                    </h1>
                  </div>
                  <div class="flex justify-center">
                    <h1
                      class="
                        text-[#858585] text-[14px]
                        w-[172px]
                        leading-[17.07px]
                      "
                    >
                      This include the services related to the oil change
                    </h1>
                  </div>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                w-[287px]
                h-[350px]
                rounded-[10.84px]
                md:mr-[30px]
                mb-[30px]
                pt-[60px]
              "
            >
              <Link :href="route('user.request-service.four-five.create')">
                <div class="grid place-content-center mb-[20px]">
                  <img
                    class="w-[150px]"
                    src="/images/shipping and forwarding.png"
                    alt="Deportation And Buggage Image"
                  />
                </div>
                <div class="text-center">
                  <div>
                    <h1 class="text-[17.23px] font-bold mb-[17.38px]">
                      Shipping and Forwarding
                    </h1>
                  </div>
                  <div class="flex justify-center">
                    <h1
                      class="
                        text-[#858585] text-[14px]
                        w-[172px]
                        leading-[17.07px]
                      "
                    >
                      This include the services related to the oil change
                    </h1>
                  </div>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                w-[287px]
                h-[350px]
                rounded-[10.84px]
                md:mr-[30px]
                mb-[30px]
                pt-[60px]
              "
            >
              <Link :href="route('user.request-service.six.create')">
                <div class="grid place-content-center mb-[20px]">
                  <img
                    class="w-[150px]"
                    src="/images/delivery services.png"
                    alt="Delivering Household Image"
                  />
                </div>
                <div class="text-center">
                  <div>
                    <h1 class="text-[17.23px] font-bold mb-[17.38px]">
                      Delivery Services
                    </h1>
                  </div>
                  <div class="flex justify-center">
                    <h1
                      class="
                        text-[#858585] text-[14px]
                        w-[172px]
                        leading-[17.07px]
                      "
                    >
                      This include the services related to the oil change
                    </h1>
                  </div>
                </div>
              </Link>
            </div>

            <div
              class="
                bg-[#FFFFFF]
                w-[287px]
                h-[350px]
                rounded-[10.84px]
                md:mr-[30px]
                mb-[30px]
                pt-[60px]
              "
            >
              <Link :href="route('user.request-service.sell-car.create')">
                <div class="grid place-content-center mb-[20px]">
                  <img
                    class="w-[150px]"
                    src="/images/sell your broken car.png"
                    alt="Selling Car Image"
                  />
                </div>
                <div class="text-center">
                  <div>
                    <h1 class="text-[17.23px] font-bold mb-[17.38px]">
                      Sell your Broken Car
                    </h1>
                  </div>
                  <div class="flex justify-center">
                    <h1
                      class="
                        text-[#858585] text-[14px]
                        w-[172px]
                        leading-[17.07px]
                      "
                    >
                      This include the services related to the oil change
                    </h1>
                  </div>
                </div>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>