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
        <img class="w-28" src="images/logo.png" alt="" />
      </div>
      <div class="grid justify-center mb-12">
        <div
          class="mb-[26px] pl-[15px]"
          :class="{
            'flex items-center bg-white text-[#24C6C9] rounded-[5px] shadow-md w-[150px] h-[40px] mb-[15px]':
              $page.component.startsWith('Home'),
          }"
        >
          <div>
            <Link class="text-[18px]" href="/home-provider">Home </Link>
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
            <Link class="text-[18px]" href="/request-provider"
              >Your Requests</Link
            >
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
            <Link class="text-[18px]" href="/your-offers-provider"
              >Your Offers</Link
            >
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
            <Link class="text-[18px]" href="/your-orders-provider"
              >Your Orders</Link
            >
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
            <Link class="text-[18px]" href="/chat-provider">Chats</Link>
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
            <Link class="text-[18px]" href="/wallet-provider">Wallet</Link>
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
            <Link class="text-[18px]" href="/profile-provider">Profile</Link>
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
    <div
      class="
        flex
        justify-center
        md:justify-between
        py-[14px]
        md:py-[18px] md:px-[120px]
        bg-[#24C6C9]
        md:bg-white
      "
    >
      <div class="md:flex md:items-center w-[60px]">
        <img src="images/logo.png" alt="logo" />
      </div>
      <div class="hidden md:flex items-center font-semibold">
        <h1 class="text-[#858585] hover:text-black mr-[100px]">
          <Link href="/home">Home</Link>
        </h1>
        <h1 class="text-[#858585] hover:text-black mr-[100px]">
          <Link href="#services">Services</Link>
        </h1>
        <h1 class="text-[#24C6C9]">
          <Link href="/signin">Join</Link>
        </h1>
      </div>
    </div>
    <!-- menubar button -->
    <div
      class="md:hidden absolute cursor-pointer top-[23px] pl-[32px] z-10"
      @click="open = true"
    >
      <img src="images/menubar.png" alt="menu icon" />
    </div>
  </div>
  <div class="hidden md:inline bg-[#24C6C9] rounded-r-[26px]">
    <div class="grid justify-center mt-10 mb-12">
      <img class="w-28" src="images/logo.png" alt="" />
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
          <Link class="text-[18px]" href="/home-provider">Home </Link>
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
          <Link class="text-[18px]" href="/request-provider"
            >Your Requests</Link
          >
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
          <Link class="text-[18px]" href="/your-offers-provider"
            >Your Offers</Link
          >
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
          <Link class="text-[18px]" href="/your-orders-provider"
            >Your Orders</Link
          >
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
          <Link class="text-[18px]" href="/chat-provider">Chats</Link>
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
          <Link class="text-[18px]" href="/wallet-provider">Wallet</Link>
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
          <Link class="text-[18px]" href="/profile-provider">Profile</Link>
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
</script>

