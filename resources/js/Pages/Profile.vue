<template>
  <Head title="Profile" />

  <div class="min-h-screen bg-gray-100 md:grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 px-[30px] py-[30px] md:px-[60px] md:py-[60px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <div class="md:grid grid-cols-9 mt-[80px]">
        <div class="md:col-span-3 mb-[50px]">
          <div class="bg-white rounded-[20px] pt-[40px] pb-[30px]">
            <div class="flex justify-center">
              <img src="images/Ellipse 15.png" alt="" />
            </div>
            <div class="flex justify-center mt-[50px]">
              <button class="border-2 rounded-[10px] px-[35px] py-[12px]">
                <h1 class="text-[#858585] text-[14px]">Change Photo</h1>
              </button>
            </div>
          </div>
        </div>
        <div
          class="
            col-span-6
            bg-white
            rounded-[20px]
            px-[40px]
            py-[40px]
            md:ml-[40px]
          "
        >
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
              <ProfileTextField fieldtype="text" name="city" placeholder="City">
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