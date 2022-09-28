<template>
  <Head title="Sign UP Seller" />
  <IndexHead></IndexHead>
  <div class="bg-gray-100 pb-20">
    <div class="min-h-screen">
      <div class="flex mx-[20px] md:mx-48 pb-5 pt-20">
        <div class="bg-white rounded-full"></div>
        <div class="relative bottom-[5px] mr-[15px]">
          <Link href="/signin"
            ><img class="w-[36px] h-[36px]" src="images/Back.png" alt=""
          /></Link>
        </div>
        <div>
          <h1 class="text-lg font-bold">Create Account</h1>
        </div>
      </div>
      <div class="bg-white mx-[20px] md:mx-48 px-[20px] md:px-[60px] py-[60px] rounded-lg">
        <div class="mb-5">
          <div class="mb-2">
            <h1 class="font-bold text-[16px]">Account Type</h1>
          </div>
          <div class="md:grid grid-cols-2">
            <div class="mb-5">
              <button class="bg-gray-100 rounded-lg py-2 px-16 mr-6">
                User
              </button>
              <button class="bg-green-100 text-[#24C6C9] rounded-lg py-2 px-16">
                Seller
              </button>
            </div>
            <div class="md:relative bottom-[10px] flex md:pl-[50px]">
              <div
                class="
                  flex
                  justify-center
                  items-center
                  rounded-full
                  bg-[#24C6C9]
                  w-[60px]
                  h-[60px]
                "
              >
                <h1 class="text-[30px] text-white">A</h1>
              </div>
              <div class="flex items-center ml-[17px]">
                <h1 class="text-[16px] font-bold">Upload Photo</h1>
              </div>
            </div>
          </div>
        </div>
        <div>
          <form>
            <div class="md:grid grid-cols-2 gap-[100px]">
              <div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="name"
                    placeholder="Your Name"
                  >
                    <h1 class="font-bold">Name</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="select country"
                    name="country"
                  >
                    <h1 class="font-bold">Country</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="select Region"
                    name="region"
                  >
                    <h1 class="font-bold">Region</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="comercial_activity"
                    placeholder="Comercial Activity"
                  >
                    <h1 class="font-bold">Comercial Activity</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="address"
                    placeholder="Enter Shop Adress"
                  >
                    <h1 class="font-bold">Address</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="iban"
                    placeholder="Enter bank IBAN"
                  >
                    <h1 class="font-bold">IBAN</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <div class="mb-[13px]">
                    <h1 class="text-[16px] font-bold">License Photo</h1>
                  </div>
                  <div
                    class="
                      flex
                      items-center
                      justify-center
                      bg-gray-100
                      rounded-[10px]
                      w-[310px]
                      h-[200px]
                    "
                  >
                    <div>
                      <h1 class="text-[15px] text-[#3A3A3A]">Tap to Add</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="nationality"
                    name="nationality"
                  >
                    <h1 class="font-bold">Nationality</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="select city" name="city">
                    <h1 class="font-bold">City</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="ID_or_comercial_regidtration_number"
                    placeholder="Enter Number"
                  >
                    <h1 class="font-bold">
                      ID or Comercial Regidtration number
                    </h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="legal_capacity"
                    placeholder="Enter Legal Capacity"
                  >
                    <h1 class="font-bold">Legal Capacity</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="mobile_number"
                    placeholder="Enter Mobile Number"
                  >
                    <h1 class="font-bold">Mobile Number</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="account_number"
                    placeholder="Enter Account number"
                  >
                    <h1 class="font-bold">Account Number</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <div class="mb-[13px] mr-[13px]">
                    <h1 class="text-[16px] font-bold">License Photo</h1>
                  </div>
                  <div
                    class="
                      flex
                      items-center
                      justify-center
                      bg-gray-100
                      rounded-[10px]
                      w-[310px]
                      h-[200px]
                    "
                  >
                    <div>
                      <h1 class="text-[15px] text-[#3A3A3A]">Tap to Add</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-[70px]">
              <FormButton><Link href="/home-provider">Sign Up</Link></FormButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>