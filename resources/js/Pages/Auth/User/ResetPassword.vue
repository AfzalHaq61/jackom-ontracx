<template>
  <Head title="New Password" />
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
                <img class="w-24" src="/images/logo.png" alt="logo" />
              </DialogTitle>
              <div>
                <h1 class="text-sm font-bold mt-1 mt-5">
                  Enter a new password
                </h1>
              </div>
              <div class="mt-2">
                <form @submit.prevent="submit">
                  <input type="hidden" name="token" value="{{  }}" />
                  <TextField
                    fieldtype="password"
                    name="password"
                    placeholder="password"
                    v-model="form.password"
                    :errors="errors.password"
                  >
                  </TextField>
                  <TextField
                    fieldtype="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    v-model="form.password_confirmation"
                    :errors="errors.password_confirmation"
                  >
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
                    <button type="submit">Done</button>
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
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";
import route from "ziggy-js";

const props = defineProps({
  errors: Object,
  email: String,
  token: String,
});

let form = reactive({
  token: props.token,
  email: props.email,
  password: "",
  password_confirmation: "",
});

function submit() {
  Inertia.post(route("password.update"), form, {
    forceFormData: true,
  });
}

const isOpen = ref(true);

function setIsOpen(value) {
  isOpen.value = value;
}
</script>