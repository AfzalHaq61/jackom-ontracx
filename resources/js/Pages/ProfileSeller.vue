<template>
  <Head title="Profile Seller" />

  <div class="min-h-screen bg-gray-100 grid grid-cols-7">
    <!-- Home Left Index -->
    <SellerIndex />

    <div class="col-span-6 pl-[59px] pr-[115px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <div class="grid grid-cols-9 mt-[80px]">
        <div class="col-span-3 mr-[40px]">
          <div class="bg-white rounded-[20px] pt-[40px] pb-[30px]">
            <div>
              <div class="flex justify-center">
                <img src="images/Ellipse 15.png" alt="">
              </div>
            </div>
            <div class="mt-[50px]">
              <div class="flex justify-center mb-[10px]">
                <img src="images/Group 145.png" alt="">
              </div>
              <div class="text-center">
                <h1 class="text-[#24C6C9] text-[15px]">56% Completed</h1>
              </div>
            </div>
          </div>
          <div class="flex justify-end mt-[30px]">
            <button class="text-[#858585] bg-white text-[15px] border-2 border-[#858585] rounded-[4px] px-[10px] py-[10px]">Remove This User</button>
          </div>
        </div>
        <div class="bg-white col-span-6 rounded-[20px] px-[40px] py-[40px] ml-[40px]">
          <div class="flex mb-[24px]">
            <div class="mr-5">
              <button
                class="
                  bg-[#24C6C9]
                  text-white text-[16px]
                  rounded-[4px]
                  px-[30px]
                  py-[8px]
                "
              >
                <Link href="/profile-seller">General</Link>
              </button>
            </div>
            <div class="mr-5">
              <button
                class="bg-gray-100 text-[16px] rounded-[4px] px-[30px] py-[8px]"
              >
                <Link href="/profile-seller-update">Other</Link>
              </button>
            </div>
            <div class="mr-5">
              <button
                class="bg-gray-100 text-[16px] rounded-[4px] px-[30px] py-[8px]"
              >
                <Link href="/profile-seller-reviews">Reviews</Link>
              </button>
            </div>
          </div>
          <div>
            <h1 class="text-[16px] font-bold">Personal Information</h1>
          </div>
          <form action="">
            <div>
              <ProfileTextField
                fieldtype="text"
                name="first_name"
                placeholder="First Name"
              >
              </ProfileTextField>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="last_name"
                placeholder="Last Name"
              >
              </ProfileTextField>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="country"
                placeholder="Country"
              >
              </ProfileTextField>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="city"
                placeholder="City"
              >
              </ProfileTextField>
            </div>
            <div>
              <h1 class="text-[16px] font-bold">Contact Information</h1>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="email"
                placeholder="Email"
              >
              </ProfileTextField>
            </div>
            <div>
              <ProfileTextField
                fieldtype="text"
                name="contact_number"
                placeholder="Contact Number"
              >
              </ProfileTextField>
            </div>
            <div
              class="
              flex
              justify-center
              bg-[#24C6C9]
              text-white
              rounded-lg
              py-2
              text-[16px]
              mt-[54px]
              "
            >
              <button><a href="/textverification">Save Changes</a></button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>