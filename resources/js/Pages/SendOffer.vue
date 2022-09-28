<template>
  <Head title="Offers" />

  <div class="min-h-screen bg-white md:grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="mt-[53px]">
          <div class="flex">
            <div class="relative bottom-[5px] mr-[15px]">
              <Link href="/signin"
                ><img class="w-[36px] h-[36px]" src="images/Back.png" alt=""
              /></Link>
            </div>
            <div>
              <h1 class="text-[16px] font-bold">Send Offer</h1>
            </div>
          </div>
          <div class="md:grid grid-cols-3 gap-[37px] mt-[45px]">
            <div class="col-span-2">
              <div class="mb-[30px]">
                <TextField
                  fieldtype="text"
                  name="service_cost"
                  placeholder="Enter estimated cost of the service"
                >
                  <h1 class="font-bold">Service Cost</h1>
                </TextField>
              </div>
              <div class="mb-[30px]">
                <TextField
                  fieldtype="text"
                  name="due_time"
                  placeholder="Enter estimated time"
                >
                  <h1 class="font-bold">Due Time</h1>
                </TextField>
              </div>
              <div class="mb-[30px]">
                <DescriptionTextField
                  fieldtype="text"
                  name="details"
                  placeholder="Describe your way of service"
                >
                  <h1 class="font-bold">Details</h1>
                </DescriptionTextField>
              </div>
              <div class="mt-[57px]">
                <FormButton><Link href="/request-provider">Send Offer</Link></FormButton>
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