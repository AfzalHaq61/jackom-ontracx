<template>
  <Head title="Request Service 6" />

  <div class="min-h-screen bg-[#FFFFFF] md:grid grid-cols-7">
    <!-- Home Left Index -->
    <Requestindex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[30px]">
      <!-- Menu Bar -->
      <RequestMenubar/>
      <!-- Head -->
      <RequestHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="md:grid grid-cols-3">
          <div class="col-span-2 md:pr-[39px]">
            <div
              class="
                flex
                justify-between
                text-sm
                mt-[44px]
                mb-[26px]
                mr-[115px]
              "
            >
              <div>
                <img class="w-[100px] mb-5" src="images/Oil2.png" alt="Delevering Household Image" />
                <h1 class="text-[16px] font-bold">Free services and delivering household needs</h1>
              </div>
            </div>
            <div>
              <form action="">
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Free Service" name="free_service">
                    <h1 class="font-bold">Free Service</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="kind" name="kind">
                    <h1 class="font-bold">What Kind</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="weight" name="weight">
                    <h1 class="font-bold">Weight</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="my_location"
                    placeholder="Location"
                  >
                    <h1 class="font-bold">My Location</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="to_location"
                    placeholder="To Location"
                  >
                    <h1 class="font-bold">To Location</h1>
                  </TextField>
                </div>
                <div class="mb-[94px]">
                  <FormButton><Link href="/request">Post Request</Link></FormButton>
                </div>
              </form>
            </div>
          </div>
          <div>
            <ImageField />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>