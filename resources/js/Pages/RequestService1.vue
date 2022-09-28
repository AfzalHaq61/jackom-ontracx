<template>
  <Head title="Request Service 1" />

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
                <img class="w-[100px] mb-5" src="images/towing.png" alt="Towing and Shipping Image" />
                <h1 class="text-[16px] font-bold">Towing and Shipping</h1>
              </div>
            </div>
            <div>
              <form action="">
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Brand" name="choose_brand">
                    <h1 class="font-bold">Choose Brand</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Type" name="choose_type">
                    <h1 class="font-bold">Choose Type</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Model" name="choose_model">
                    <h1 class="font-bold">Choose Model</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="color"
                    placeholder="Select Color"
                  >
                    <h1 class="font-bold">Choose Color</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="plate_number"
                    placeholder="Plate Number"
                  >
                    <h1 class="font-bold">Plate Number</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location_from"
                    placeholder="Location From"
                  >
                    <h1 class="font-bold">Location From</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location_to"
                    placeholder="Location To"
                  >
                    <h1 class="font-bold">Location To</h1>
                  </TextField>
                </div>
                <div class="mb-[94px]">
                  <FormButton
                    ><Link href="/request">Post Request</Link></FormButton
                  >
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