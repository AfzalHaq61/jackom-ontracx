<template>
  <div class="md:hidden">
    <!-- side menubar mobile -->
    <div
      class="bg-[#24C6C9] w-[270px] min-h-full shadow-lg z-20 absolute"
      v-if="open"
    >
      <div class="ml-[20px] mt-[20px]">
        <button>
          <XIcon @click="open = false" class="text-white w-[23px]" />
        </button>
      </div>
      <div class="grid justify-center mb-12">
        <div class="grid justify-center mb-12">
          <img class="w-28" src="/images/logo.png" alt="" />
        </div>
        <div class="grid justify-center text-white">
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('Home'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="/home">Home </Link>
            </div>
          </div>
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('Request'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="/request">Your Requests</Link>
            </div>
          </div>
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('YourOrders'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="/your-orders">Your Orders</Link>
            </div>
          </div>
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('Chat'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="/chat">Chats</Link>
            </div>
          </div>
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('Wallet'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="/wallet">Wallet</Link>
            </div>
          </div>
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('Profile'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="/profile">Profile</Link>
            </div>
          </div>
          <div
            class="mb-[26px] pl-[15px]"
            :class="{
              'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
                $page.component.startsWith('Logout'),
            }"
          >
            <div>
              <Link class="text-[18px]" href="">Logout</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- menubar -->
    <div class="flex justify-between bg-[#24C6C9] py-[20px] px-[20px]">
      <div
        class="md:hidden cursor-pointer top-[23px] z-10"
        @click="open = true"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-6 h-6 fill-black"
        >
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
      <div class="md:flex md:items-center w-[60px]">
        <img src="/images/logo.png" alt="logo" />
      </div>
      <div
        class="md:hidden cursor-pointer top-[23px] z-10"
        @click="openmenu = !openmenu"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-6 h-6 fill-black"
        >
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd"
          />
        </svg>
      </div>
    </div>
    <!-- menu -->
    <div
      class="md:hidden bg-white font-semibold w-full absolute shadow-md py-2"
      v-if="openmenu"
    >
      <div
        class="
          text-[#858585]
          hover:text-black
          font-semibold
          hover:bg-gray-100
          pl-[32px]
          py-2
        "
        :class="{
          'text-black font-bold': $page.component.startsWith(
            'Request/RequestServiceOne'
          ),
        }"
      >
        <Link :href="route('request.service.one.create')">
          <h1>Towing</h1>
        </Link>
      </div>
      <div
        class="
          text-[#858585]
          hover:text-black
          font-semibold
          hover:bg-gray-100
          pl-[32px]
          py-2
        "
        :class="{
          'text-black font-bold': $page.component.startsWith(
            'Request/RequestServiceTwo'
          ),
        }"
      >
        <Link :href="route('request.service.two.create')">
          <h1>Repairing</h1>
        </Link>
      </div>
      <div
        class="
          text-[#858585]
          hover:text-black
          font-semibold
          hover:bg-gray-100
          pl-[32px]
          py-2
        "
        :class="{
          'text-black font-bold': $page.component.startsWith(
            'Request/RequestServiceThree'
          ),
        }"
      >
        <Link :href="route('request.service.three.create')">
          <h1>Spare Parts</h1>
        </Link>
      </div>
      <div
        class="
          text-[#858585]
          hover:text-black
          font-semibold
          hover:bg-gray-100
          pl-[32px]
          py-2
        "
        :class="{
          'text-black font-bold': $page.component.startsWith(
            'Request/RequestServiceFourFive'
          ),
        }"
      >
        <Link :href="route('request.service.four-five.create')">
          <h1>Baggage Transfer</h1>
        </Link>
      </div>
      <div
        class="
          text-[#858585]
          hover:text-black
          font-semibold
          hover:bg-gray-100
          pl-[32px]
          py-2
        "
        :class="{
          'text-black font-bold': $page.component.startsWith(
            'Request/RequestServiceSix'
          ),
        }"
      >
        <Link :href="route('request.service.six.create')">
          <h1>Delivery</h1>
        </Link>
      </div>
      <div
        class="
          text-[#858585]
          hover:text-black
          font-semibold
          hover:bg-gray-100
          pl-[32px]
          py-2
        "
        :class="{
          'text-black font-bold': $page.component.startsWith(
            'Request/RequestServiceSellCars'
          ),
        }"
      >
        <Link :href="route('request.service.sell-car.create')">
          <h1>Selling Cars</h1>
        </Link>
      </div>
    </div>
    <!-- menubar button -->
  </div>
  <div class="hidden md:inline bg-[#24C6C9] rounded-r-[26px]">
    <div class="grid justify-center mt-10 mb-12">
      <img class="w-28" src="/images/logo.png" alt="" />
    </div>
    <div class="grid justify-center text-white">
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('Home'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="/home">Home </Link>
        </div>
      </div>
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('Request'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="/request">Your Requests</Link>
        </div>
      </div>
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('YourOrders'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="/your-orders">Your Orders</Link>
        </div>
      </div>
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('Chat'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="/chat">Chats</Link>
        </div>
      </div>
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('Wallet'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="/wallet">Wallet</Link>
        </div>
      </div>
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('Profile'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="/profile">Profile</Link>
        </div>
      </div>
      <div
        class="mb-[26px] pl-[15px]"
        :class="{
          'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
            $page.component.startsWith('Logout'),
        }"
      >
        <div>
          <Link class="text-[18px]" href="">Logout</Link>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
const open = ref(false);
const openmenu = ref(false);
</script>
