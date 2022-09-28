<template>
  <Head title="Forgot Password" />
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
              class="
                w-full w-80
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
                  <Link href="/"
                    ><XIcon @click="setIsOpen(false)" class="h-[23px] w-[23px]"
                  /></Link>
                </button>
              </div>
              <DialogTitle as="h3" class="grid place-content-center">
                <img class="w-24" src="images/logo.png" alt="logo" />
              </DialogTitle>
              <div>
                <h1 class="text-sm font-bold mt-1 mb-6 mt-5">
                  No Need to worry !
                </h1>
              </div>
              <div>
                <h1 class="text-sm text-gray-500 mt-1 mb-3">
                  Please enter email address
                </h1>
              </div>
              <div class="mt-2">
                <form>
                  <TextField
                    class="mb-10"
                    fieldtype="email"
                    name="email"
                    placeholder="Enter your email address"
                  >
                    Email
                  </TextField>
                  <div
                    class="
                      flex
                      justify-center
                      bg-[#24C6C9]
                      text-white
                      rounded-lg
                      py-2
                      mt-5
                      mb-10
                    "
                  >
                    <button>
                      <Link href="/password-verification" class="text-white"
                        >Next</Link
                      >
                    </button>
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