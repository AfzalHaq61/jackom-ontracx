<template>
  <Head title="Chat" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <RequestHead :name="name"></RequestHead>
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="mt-[32px]">
          <div
            class="
              bg-white
              rounded-[20px]
              py-[25px]
              px-[100px]
              mb-[50px]
              mr-[200px]
            "
          >
            <div class="mb-[17px]">
              <h1 class="text-[20px]">Chats</h1>
            </div>
            <div
              v-for="chat in chats.data"
              :key="chat.id"
              class="
                border-r-2 border-b-2
                hover:border-2
                hover:border-[#24C6C9]
                hover:bg-gray-100
                rounded-[12px]
                p-[10px]
                mb-[14px]
                mr-[100px]
              "
            >
              <Link
                :href="route('user.chat.messege.create', { chat: chat.id })"
              >
                <div class="flex">
                  <div class="mr-[17px]">
                    <img src="/images/Ellipse 59.png" alt="" />
                  </div>
                  <div class="w-full">
                    <div class="flex justify-between">
                      <div>
                        <h1 class="text-[14px]">{{ chat.name }}</h1>
                      </div>
                      <div>
                        <h1 class="text-[#787878] text-[10px]">5 min</h1>
                      </div>
                    </div>
                    <div>
                      <h1 class="text-[#787878] text-[12px]">
                        Urna turpis in dui accumsan in.
                      </h1>
                    </div>
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
import route from "ziggy-js";
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

const props = defineProps({
  chats: Object,
  name: String,
});

let form = reactive({
  messege: "",
});
</script>