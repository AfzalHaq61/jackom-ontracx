<template>
  <Head title="MainPage" />
  <div class="">
    <!-- Navbar -->
    <IndexHead></IndexHead>
    <!-- Main Screen -->
    <div
      class="
        grid
        sm:grid-cols-1
        md:grid-cols-2
        bg-[#24C6C9]
        pt-[40px]
        mb-[40px]
        md:mb-[100px]
      "
    >
      <div class="grid justify-center items-center mb-[60px]">
        <div class="font-black text-[40px] text-white mb-[50px] md:mb-[0px]">
          Vehicle Service
        </div>
        <div class="flex justify-center items-center">
          <button
            class="
              bg-white
              rounded-[10px]
              font-semibold
              text-[#24C6C9] text-[12px]
              md:text-[20px]
              px-[40px]
              py-[10px]
              md:px-[100px] md:py-[25px]
            "
          >
            <Link href="/signin">Join Now</Link>
          </button>
        </div>
      </div>
      <div class="flex justify-center items-center mb-[60px]">
        <div class="w-[250px] md:w-[530px]">
          <img src="images/Banner.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Featues Session -->
  <div id="services">
    <div class="grid place-content-center mb-[40px]">
      <h1 class="font-bold text-[36px] mb-1">Featured Services</h1>
      <div class="grid place-content-center">
        <img src="images/Line 1.png" alt="line 1" />
      </div>
    </div>

    <div
      class="
        grid
        sm:grid-cols-1
        md:grid-cols-3
        gap-[100px]
        mx-[100px]
        md:mx-[115px]
      "
    >
      <div class="bg-green-100 rounded-[18px] p-[60px]">
        <Link href="/request-Service-1">
          <div class="grid place-content-center mb-[40px]">
            <img src="images/towing.png" alt="Sipping and Towing Image" />
          </div>
          <div class="text-center">
            <h1 class="font-bold text-[20px] text-[#24C6C9]">Sipping and Towing</h1>
          </div>
        </Link>
      </div>
      <div class="bg-green-100 rounded-[18px] p-[60px]">
        <Link href="/request-Service-2">
          <div class="grid place-content-center mb-[40px]">
            <img src="images/Group 156.png" alt="Car Wash and Repair Image" />
          </div>
          <div class="text-center">
            <h1 class="font-bold text-[20px] text-[#24C6C9]">Car Wash & <br> Repairing</h1>
          </div>
        </Link>
      </div>
      <div class="bg-green-100 rounded-[18px] p-[60px]">
        <Link href="/request-Service-7">
          <div class="grid place-content-center mb-[40px]">
            <img src="images/Sparepart.png" alt="Spare Parts Image" />
          </div>
          <div class="text-center">
            <h1 class="font-bold text-[20px] text-[#24C6C9]">Spare Parts</h1>
          </div>
        </Link>
      </div>
      <div class="bg-green-100 rounded-[18px] p-[60px]">
        <Link href="/request-Service-4,5">
          <div class="grid place-content-center mb-[40px]">
            <img src="images/bagging.png" alt="Deportation And Buggage Image" />
          </div>
          <div class="text-center">
            <h1 class="font-bold text-[20px] text-[#24C6C9]">Deportation And Buggage <br>Transfer</h1>
          </div>
        </Link>
      </div>
      <div class="bg-green-100 rounded-[18px] p-[60px]">
        <Link href="/request-Service-6">
          <div class="grid place-content-center mb-[40px]">
            <img src="images/Oil2.png" alt="Delivering Household Image" />
          </div>
          <div class="text-center">
            <h1 class="font-bold text-[20px] text-[#24C6C9]">Free services and Delivering Household needs</h1>
          </div>
        </Link>
      </div>
      <div class="bg-green-100 rounded-[18px] p-[60px]">
        <Link href="/sell-car">
          <div class="grid place-content-center mb-[40px]">
            <img src="images/sellcar.png" alt="Selling Car Image" />
          </div>
          <div class="text-center">
            <h1 class="font-bold text-[20px] text-[#24C6C9]">Sell Your Car</h1>
          </div>
        </Link>
      </div>
    </div>
  </div>
  <!-- About Us -->
  <div class="bg-[#24C6C9] mt-[100px] md:mt-[100px]" id="whyus">
    <div class="grid place-content-center mb-[110px] pt-[35px]">
      <h1 class="font-bold text-[36px] text-white mb-2">Why Us</h1>
      <div class="grid place-content-center">
        <img src="images/Line 2.png" alt="line 2" />
      </div>
    </div>
    <div class="flex justify-center text-white pb-[130px]">
      <div class="flex flex-col md:flex-row">
        <div class="flex mr-[65px] mb-[30px]">
          <div class="mr-[30px]">
            <img src="images/Ellipse 2.png" alt="Ellipse" />
          </div>
          <div>
            <h1 class="mb-[18px] text-[20px]">Lorem ipsum</h1>
            <p class="text-[16px] w-52">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad vitae
              recusandae quam soluta officia ipsam
            </p>
          </div>
        </div>
        <div class="flex mr-[65px] mb-[30px]">
          <div class="mr-[30px]">
            <img src="images/Ellipse 2.png" alt="Ellipse" />
          </div>
          <div>
            <h1 class="mb-[18px] text-[20px]">Lorem ipsum</h1>
            <p class="text-[16px] w-52">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad vitae
              recusandae quam soluta officia ipsam
            </p>
          </div>
        </div>
        <div class="flex mr-[65px]">
          <div class="mr-[30px]">
            <img src="images/Ellipse 2.png" alt="Ellipse" />
          </div>
          <div>
            <h1 class="mb-[18px] text-[20px]">Lorem ipsum</h1>
            <p class="text-[16px] w-52">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad vitae
              recusandae quam soluta officia ipsam
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About cerosal -->
  <div class="text-center my-[140px]">
    <!-- heading -->
    <div class="grid place-content-center mb-[100px]">
      <h1 class="font-bold text-[36px] mb-1">What They Think</h1>
      <div class="grid place-content-center">
        <img src="images/Line 1.png" alt="line 1" />
      </div>
    </div>
    <!-- picture -->
    <div id="reviews">
      <div class="flex justify-center mb-[35px]">
        <img class="w-28" src="images/Ellipse 8.png" alt="" />
      </div>
      <div>
        <div class="flex justify-between mx-[44px] md:mx-[110px] mb-[33px]">
          <img src="images/Vector (1).png" alt="Vector" />
          <div class="grid place-content-center">
            <h1 class="font-bold text-[24px]">Davis Calzoni</h1>
            <div class="flex justify-center">
              <img src="images/Star.png" alt="star" />
              <img src="images/Star.png" alt="star" />
              <img src="images/Star.png" alt="star" />
              <img src="images/Star.png" alt="star" />
              <img src="images/Star.png" alt="star" />
            </div>
          </div>
          <img src="images/Vector.png" alt="Vector" />
        </div>
        <div class="grid place-content-center">
          <p class="text-[13px] md:text-[24px] w-[250px] md:w-[900px]">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
            ducimus cupiditate nobis nemo non, ipsum eaque quis laudantium
            architecto quaerat nam, ratione ut dicta Explicabo, error?
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div>
    <div class="flex justify-center bg-[#095C5E] py-[60px] px-[40px]">
      <div class="flex flex-col md:flex-row">
        <div class="text-white mb-[50px]">
          <div class="w-20 md:w-40 mb-[20px] md:mb-[40px]">
            <img src="images/logo.png" alt="logo" />
          </div>
          <div class="font-light text-[16px]">
            <div class="flex mb-[20px] md:mb-[40px]">
              <img class="mr-[20px]" src="images/phone.png" alt="phone icon" />
              <h1 class="relative top-[5px]">+66 32329 r23523</h1>
            </div>
            <div class="flex">
              <img
                class="mr-[20px]"
                src="images/android-mail.png"
                alt="mail icon"
              />
              <h1 class="relative top-[5px]">Serviceprovider@gmail.com</h1>
            </div>
          </div>
        </div>

        <div class="hidden md:inline ml-[44px] mr-[80px]">
          <img class="h-64" src="images/Line 5.png" alt="" />
        </div>

        <div class="text-white mb-[50px]">
          <div class="font-bold text-[20px] mb-[30px]">
            <h1>Site Map</h1>
          </div>
          <div class="flex font-light text-[16px]">
            <div class="mr-[100px]">
              <h1 class="mb-[16px]"><Link href="/home">Home</Link></h1>
              <h1 class="mb-[16px]"><Link href="/signin">Signin</Link></h1>
              <h1 class="mb-[16px]"><Link href="/signup">Sign Up</Link></h1>
            </div>
            <div>
              <h1 class="mb-[16px]"><Link href="#services">Features Services</Link></h1>
              <h1 class="mb-[16px]"><Link href="#whyus">Testemonials</Link></h1>
              <h1 class="mb-[16px]"><Link href="#reviews">User’s Reviews</Link></h1>
              
            </div>
          </div>
        </div>

        <div class="hidden md:inline mr-[50px] ml-[60px]">
          <img class="h-64" src="images/Line 5.png" alt="vertical line" />
        </div>

        <div class="text-white">
          <div class="font-bold text-[20px] mb-[30px]">
            <h1>Social</h1>
          </div>
          <div class="font-light text-[16px]">
            <div class="flex mb-[23px]">
              <img class="mr-[25px]" src="images/facebook.png" alt="facebook" />
              <h1>Facebook</h1>
            </div>
            <div class="flex mb-[23px]">
              <img class="mr-[25px]" src="images/Twitter.png" alt="twitter" />
              <h1>Twitter</h1>
            </div>
            <div class="flex mb-[23px]">
              <img
                class="mr-[25px]"
                src="images/linkedin.png"
                alt="linked in"
              />
              <h1>Linked In</h1>
            </div>
            <div class="flex mb-[23px]">
              <img
                class="mr-[25px]"
                src="images/instagram.png"
                alt="Instagram"
              />
              <h1>Instagram</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="
        flex
        place-content-center
        bg-[#073E3F]
        font-light
        text-white text-sm
        py-[18px]
      "
    >
      <h1 class="opacity-50 tracking-wider">
        Copyright 2022 @ Service provider. All rights Reserved
      </h1>
    </div>
  </div>
</template>

<script setup>
</script>