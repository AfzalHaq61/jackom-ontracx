<template>
  <TransitionRoot :show="isOpen" as="template">
    <Dialog :initialFocus="completeButtonRef" :open="isOpen" @close="setIsOpen">
      <div class="fixed inset-0 bg-black/30" aria-hidden="true" />
      <div class="fixed inset-0 overflow-y-auto p-4">
        <div class="flex min-h-full items-center justify-center">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel
              :open="isOpen"
              @close="setIsOpen"
              class="
                w-80
                transform
                overflow-hidden
                rounded-2xl
                bg-white
                p-6
                text-left
                align-middle
                shadow-xl
                transition-all
              "
            >
              <div class="flex justify-end">
                <button>
                  <XIcon
                  @click="setIsOpen(false)"
                  class="h-[23px] w-[23px]"
                />
                </button>
              </div>
              <DialogTitle as="h3" class="grid place-content-center">
                <img class="w-24" src="images/logo.png" alt="logo" />
              </DialogTitle>
              <div class="grid place-content-center">
                <h1 class="text-sm mt-1 mb-2 font-bold">
                  Please Login to your account
                </h1>
              </div>
              <div class="mt-2">
                <form>
                  <TextField
                    class="mb-5"
                    fieldtype="email"
                    name="email"
                    placeholder="Enter your email address"
                  >
                    Email
                  </TextField>
                  <TextField
                    fieldtype="Password"
                    name="Password"
                    placeholder="Password"
                  >
                    Password
                  </TextField>
                  <div class="flex justify-end text-xs text-[#24C6C9]">
                    <a href="/forgot-password">Forgot Password?</a>
                  </div>
                  <div
                    class="
                      flex
                      justify-center
                      bg-[#24C6C9]
                      text-white
                      rounded-lg
                      py-2
                      my-5
                    "
                  >
                    <button>Login</button>
                  </div>
                  <div class="text-center text-xs">
                    <h1>Don't have account ?</h1>
                    <Link href="/signup" class="text-[#24C6C9]"
                      >Create Account</Link
                    >
                  </div>
                </form>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script setup>
import { ref } from "vue";
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
  DialogDescription,
} from "@headlessui/vue";

const isOpen = ref(true);

function setIsOpen(value) {
  isOpen.value = value;
}
</script>