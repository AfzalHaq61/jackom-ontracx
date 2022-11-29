<template>
  <Head title="Payment" />
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
                  <Link :href="
                        route('user.request', {
                          request: offer.data[0].request_id,
                        })
                      "
                    ><XIcon @click="setIsOpen(false)" class="h-[23px] w-[23px]"
                  /></Link>
                </button>
              </div>
              <DialogTitle as="h3" class="grid place-content-center">
                <img class="w-24" src="/images/logo.png" alt="logo" />
              </DialogTitle>
              <div class="grid place-content-center">
                <h1 class="text-sm mt-1 mb-2 font-bold">Please Pay First</h1>
              </div>
              <div class="my-[50px]">
                <stripe-checkout
                  ref="checkoutRef"
                  :pk="publishableKey"
                  :sessionId="sessionId"
                />
                <div
                  class="
                    flex
                    justify-center
                    bg-[#24C6C9]
                    rounded-[5px]
                    py-2
                    px-[30px]
                  "
                >
                  <button @click="submit" class="text-white">Pay!</button>
                </div>
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
  offer: Object,
});

const isOpen = ref(true);

function setIsOpen(value) {
  isOpen.value = value;
}
</script>

<script>
import { StripeCheckout } from "@vue-stripe/vue-stripe";
import axios from "axios";
export default {
  components: {
    StripeCheckout,
  },
  data() {
    return {
      publishableKey:
        "pk_test_51M6qfdL4R5mzRCVIHQ0TXTp7UwXyfaHQbxOwB6GWopkhkQsFkfLk1C39wOM3EYM1viYroE72W1Ze8Mb9fXKfIUJV00oElvWXVO",
      sessionId: "",
    };
  },
  mounted() {
    console.log("Component Mounted");
    this.getSession(this.offer.data[0].id);
  },
  methods: {
    getSession(offer_id) {
      axios
        .get("/getSession?offer_id=" + offer_id)
        .then((res) => {
          this.sessionId = res.data.id;
        })
        .catch((err) => {});
    },
    submit() {
      // You will be redirected to Stripe's secure checkout page
      this.$refs.checkoutRef.redirectToCheckout();
    },
  },
};
</script>