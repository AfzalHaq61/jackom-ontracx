<template>
  <Head title="Chat" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div v-for="chat in chat.data" :key="chat.id" class="mt-[32px] mr-[300px]">
          <div class="bg-white rounded-[12px]">
            <div class="flex p-[10px] mb-[14px]">
              <div class="mr-[17px]">
                <img src="/images/Ellipse 59.png" alt="" />
              </div>
              <div>
                <div class="flex justify-between">
                  <div>
                    <h1 class="text-[14px]">{{ chat.name }}</h1>
                  </div>
                </div>
                <div>
                  <h1 class="text-[#27BF36] text-[14px]">Online</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white rounded-[20px] mt-[12px] p-[22px]">
            <div class="flex justify-center">
              <h1
                class="
                  text-[12px] text-[#787878]
                  rounded-[30px]
                  border-r-2 border-b-2
                  py-[5px]
                  px-[10px]
                "
              >
                12 June, 2022
              </h1>
            </div>
            <div class="flex justify-start">
              <h1
                class="
                  text-[14px] text-[#787878]
                  bg-[#EFEFEF]
                  rounded-tr-[30px] rounded-bl-[30px] rounded-br-[30px]
                  border-r-2 border-b-2
                  py-[5px]
                  px-[15px]
                  mt-[33px]
                  w-[200px]
                "
              >
                At fringilla volutpat amet, a hendrerit.
              </h1>
            </div>
            <div class="flex justify-start">
              <h1
                class="
                  text-[14px] text-[#787878]
                  bg-[#EFEFEF]
                  rounded-[30px]
                  border-r-2 border-b-2
                  py-[5px]
                  px-[15px]
                  mt-[33px]
                "
              >
                At fringilla volutpat amet, a hendrerit.
              </h1>
            </div>
            <div
              v-for="messege in messeges"
              :key="messege.uuid"
              class="flex justify-end"
            >
              <h1
                class="
                  text-[14px] text-[#FFFFFF]
                  bg-[#24C6C9]
                  rounded-tr-[30px] rounded-bl-[30px] rounded-tl-[30px]
                  border-r-2 border-b-2
                  py-[5px]
                  px-[15px]
                  mt-[33px]
                "
              >
                {{ messege.messege }}
              </h1>
            </div>
            <div class="flex justify-center">
              <h1
                class="
                  text-[12px] text-[#787878]
                  rounded-[30px]
                  border-r-2 border-b-2
                  py-[5px]
                  px-[10px]
                  my-[25px]
                "
              >
                Today
              </h1>
            </div>
            <div>
              <form @submit.prevent="submit(chat.id)">
                <div class="flex">
                  <input
                    class="
                      focus:ring-[#24C6C9] focus:border-[#24C6C9]
                      block
                      w-full
                      shadow-sm
                      sm:text-sm
                      text-[#3A3A3A]
                      border-gray-100
                      rounded-md
                    "
                    type="text"
                    name="messege"
                    placeholder="Write Messege"
                    v-model="form.messege"
                  />
                  <div class="relative right-8 flex items-center">
                    <button type="submit">
                      <img
                        class="w-[26px] h-[22px]"
                        src="/images/Vector (2).png"
                        alt=""
                      />
                    </button>
                  </div>
                </div>
              </form>
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
  chat: Object,
  sender: Object,
  reciever: Object,
  messeges: Array,
});

let form = reactive({
  messege: "",
});

function submit(id) {
  Inertia.post(route("user.chat.messege.store", { chat_id: id }), form, {
    forceFormData: true,
  });
}
</script>