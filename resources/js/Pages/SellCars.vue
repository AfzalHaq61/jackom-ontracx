<template>
  <Head title="Sell Cars" />

  <div class="min-h-screen bg-[#FFFFFF] md:grid grid-cols-7">
    <!-- Home Left Index -->
    <Requestindex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[30px]">
      <!-- Menu Bar -->
      <RequestMenubar />
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
                <img
                  class="w-[100px] mb-5"
                  src="images/sellcar.png"
                  alt="Sell Car Image"
                />
                <h1 class="text-[16px] font-bold">Sell Your Car</h1>
              </div>
            </div>
            <div>
              <form action="">
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Type" name="type">
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Category" name="category">
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Manufacturing Year"
                    name="manufacturing_year"
                  >
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Regional Specification"
                    name="regional_specification"
                  >
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Paint" name="paint">
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Chasis Case"
                    name="chasis_case"
                  >
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Kilo Meters"
                    name="kilo_meters"
                  >
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Color" name="color">
                    <h1 class="font-bold"></h1>
                  </SelectOptionField>
                </div>

                <div class="mb-[30px]">
                  <div class="mb-[20px]">
                    <h1 class="text-[14px] text-[#3A3A3A]">Fuel Type</h1>
                  </div>
                  <div class="grid grid-cols-3 md:grid-cols-4 gap-[12px]">
                    <button
                      class="
                        rounded-[10px]
                        text-white
                        bg-[#24C6C9]
                        px-[35px]
                        py-[16px]
                      "
                    >
                      Electric
                    </button>
                    <button
                      class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                    >
                      Hybrid
                    </button>
                    <button
                      class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                    >
                      Petrol
                    </button>
                    <button
                      class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                    >
                      Diesel
                    </button>
                    <button
                      class="
                        rounded-[10px]
                        bg-[#F1F1F1]
                        w-max
                        px-[35px]
                        py-[16px]
                      "
                    >
                      Hybrid Plug-in
                    </button>
                  </div>
                </div>

                <div class="mb-[50px]">
                  <div class="mb-[20px]">
                    <h1 class="text-[14px] text-[#3A3A3A]">Transmision Type</h1>
                  </div>
                  <div class="mb-[12px]">
                    <button
                      class="
                        rounded-[10px]
                        text-white
                        bg-[#24C6C9]
                        px-[35px]
                        py-[16px]
                        mr-[16px]
                      "
                    >
                      Manual
                    </button>
                    <button
                      class="rounded-[10px] bg-[#F1F1F1] px-[35px] py-[16px]"
                    >
                      Automatic
                    </button>
                  </div>
                </div>

                <div class="mb-[30px]">
                  <TextField fieldtype="text" name="name" placeholder="Name">
                    <h1 class="font-bold"></h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <DescriptionTextField
                    fieldtype="text"
                    name="description"
                    placeholder="Description"
                  >
                    <h1 class="font-bold"></h1>
                  </DescriptionTextField>
                </div>
                <div class="mb-[30px]">
                  <TextField fieldtype="text" name="price" placeholder="Price">
                    <h1 class="font-bold"></h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="location"
                    placeholder="Location"
                  >
                    <h1 class="font-bold"></h1>
                  </TextField>
                </div>
                <div>
                  <FormButton>Upload</FormButton>
                </div>
              </form>
            </div>
          </div>
          <div class="col-span-1 mt-10">
            <ImageField />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>