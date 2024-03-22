<template>
  <!-- Home Page -->
  <section class="flex items-center flex-wrap justify-center gap-5">
    <div class="layout-hero">
      <h1 class="font-bold text-content sm:text-4xl">
        Sumber
        <span class="text-primaryColor">Kekayaan</span>,
        <!-- <br /> -->
        Ladang
        <span class="text-primaryColor">Berkah</span>, Hasil
        <!-- <br /> -->
        <span class="text-primaryColor"> Bumi</span>, Negeri Sejahtera!
      </h1>
      <p class="text-textColor opacity-70 fs-6 text-wrap">
        Mari bergabung dengan kami dalam perjalanan untuk menikmati keindahan dan
        kelezatan yang ditawarkan oleh hasil bumi alam. Selamat menikmati pengalaman
        belanja yang menyenangkan dan bermakna!
      </p>
      <button
        class="inline-block text-primaryColor button-border border-b-hoverPrimary hover:text-white hover:bg-primaryColor px-8 py-2 rounded-full my-2 mx-0"
      >
        Shop Now &#8594;
      </button>
    </div>

    <div class="">
      <img :src="imageUrl" alt="" class="max-w-full py-10 px-0" width="600px" />
    </div>
  </section>
  <!-- Home Page End -->

  <!-- Feature Page -->
    <div class="d-block w-full bg-grey py-12 h-full">
        <div class="container mx-auto justify-center my-12">
            <div class="text-textColor fs-2 fw-bold text-center d-flex mx-auto justify-center">
                <h2 class="fw-bold fs-1 mb-5 mt-0">Layanan kami</h2>
                <p></p>
            </div>
            <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
                <div class="card-field border border-border-secondary bg-white rounded-xl px-4 py-6 flex justify-center items-center gap-5">
                    <img :src="Meat" alt="Delivery" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium capitalize text-md">Pengiriman langsung</h4>
                        <p class="text-gray-500 text-xs text-wrap">
                            Nikmati kemudahan berbelanja dengan layanan pengiriman kami yang mengantarkan produk langsung <br> ke pintu Anda
                        </p>
                    </div>
                </div>
                <div class="card-field border border-border-secondary bg-white rounded-xl px-4 py-6 flex justify-center items-center gap-5">
                    <img :src="Vegetable" alt="Delivery" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium capitalize text-md">Konsultasi ahli nutrisi</h4>
                        <p class="text-gray-500 text-xs">
                            Dapatkan panduan ahli tentang kesehatan dan gizi dengan layanan konsultasi nutrisi kami
                        </p>
                    </div>
                </div>
                <div class="card-field border border-border-secondary bg-white rounded-xl px-4 py-6 flex justify-center items-center gap-5">
                    <img :src="Forest" alt="Delivery" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium capitalize text-md">Paket langganan bulanan</h4>
                        <p class="text-gray-500 text-xs">
                            Hemat waktu dan uang dengan paket langganan bulanan kami yang menyediakan produk-produk pilihan secara teratur
                        </p>
                    </div>
                </div>
                <div class="card-field border border-border-secondary bg-white rounded-xl px-4 py-6 flex justify-center items-center gap-5">
                    <img :src="Grain" alt="Delivery" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium capitalize text-md">Pengiriman internasional</h4>
                        <p class="text-gray-500 text-xs">
                            Kami memungkinkan Anda menikmati produk berkualitas dari hasil bumi di mana pun Anda berada.
                        </p>
                    </div>
                </div>
                <div class="card-field border border-border-secondary bg-white rounded-xl px-4 py-6 flex justify-center items-center gap-5">
                    <img :src="Spice" alt="Delivery" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium capitalize text-md">Layanan pelanggan 24/7</h4>
                        <p class="text-gray-500 text-xs">
                            Layanan pelanggan kami siap membantu Anda kapan pun Anda membutuhkannya
                        </p>
                    </div>
                </div>
                <div class="card-field border border-border-secondary bg-white rounded-xl px-4 py-6 flex justify-center items-center gap-5">
                    <img :src="Ship" alt="Delivery" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium capitalize text-md">Support pelanggan 24/7</h4>
                        <p class="text-gray-500 text-xs">
                            Layanan pelanggan kami siap membantu Anda kapan pun Anda membutuhkannya
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Feature Page end -->

  <!-- Card Page -->
  <section class="container w-full mx-auto py-12">
    <div class="text-textColor fs-2 my-3 text-center d-inline mx-auto justify-center">
        <h2 class="fw-bold fs-1 fw-bold">Kategori</h2>
        <p class="text-textColor opacity-70 fs-6 text-wrap mt-3" style="margin-bottom:85px;">
            Nikmati berbagai produk berkualitas tinggi dari hasil bumi, membuat setiap saat makan menjadi pengalaman yang memuaskan <br>
            temukan pilihan terbaik dari bumi. Di sini, anda akan menemukan berbagai produk berkualitas tinggi <br> lorem ipsum dolor sit amet consectetur adipisicing elit. Est, tempora?
        </p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-12 mb-16 w-3/4 mx-auto">
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Meat" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">meat</h4>
        </div>
      </div>
      <!-- hover -->
      <!--  text-textColor hover:bg-primaryColor hover:text-white -->

      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Vegetable" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Vegetable</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Fruit" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Fruit</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Forest" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Forest</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Grain" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Grain</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Industri" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Industri</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Ship" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Ship</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Processed" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Processed</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Spice" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Spice</h4>
        </div>
      </div>
      <div class="card flex flex-col items-center justify-center">
        <div class="rounded-xl p-5 px-8">
          <img :src="Textile" alt="" class="icons w-16 mb-2" />
          <h4 class="text-center">Textile</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- Card Page End -->


</template>

<style>
.button-border {
  border: 2px solid #3cb72b;
  transition: background 0.5s;
}
.text-content {
  font-size: 50px;
  line-height: 1.05;
  margin: 25px 0;
}

.layout-hero {
  flex-basis: 50%;
  min-width: 300px;
  max-width: 550px;
}

h4 {
  text-transform: capitalize;
  font-size: 20px;
}
.card {
  transition: transform 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
}
.card:hover {
  transition: 0.3s ease-in-out;
  background-color: #20262E;
  cursor: pointer;
  transform: translateY(-10px);
  color: #fff;
}

.icons {
  width: 50px;
  border: none;
  outline: none;
  display: flexbox;
  justify-content: center;
  align-items: center;
  margin: auto;
}

.card:hover .icons {
  filter: invert(2);
}

.card-field {
    transition: .2s ease-in-out all;
}

.card-field:hover {
    cursor: pointer;
    box-shadow: 1px 2px 18px rgba(0,0,0,0.2);
}

@media only screen and (max-width: 800px) {
  .text-content {
    font-size: 36px;
  }
}
@media only screen and (max-width: 500px) {
  .text-content {
    font-size: 32px;
  }
}
</style>

<script>
export default {
  data() {
    return {
      Meat: "",
      Vegetable: "",
      Fruit: "",
      Forest: "",
      Grain: "",
      Industri: "",
      Ship: "",
      Processed: "",
      Spice: "",
      Textile: "",
      imageUrl: "",
      imgBg: "",
    };
  },
  mounted() {
    // Set imageUrl menggunakan properti asset dari Laravel
    this.Meat = "/assets/icon/meat.svg";
    this.Vegetable = "/assets/icon/vegetable.svg";
    this.Fruit = "/assets/icon/fruit.svg";
    this.Forest = "/assets/icon/forest.svg";
    this.Grain = "/assets/icon/grain.svg";
    this.Industri = "/assets/icon/industri.svg";
    this.Ship = "/assets/icon/perahu.svg";
    this.Processed = "/assets/icon/processed.svg";
    this.Spice = "/assets/icon/spice.svg";
    this.Textile = "/assets/icon/textile.svg";

    this.imageUrl = "/assets/img/Profile.svg";
    this.imgBg = "/assets/img/bg-profile.svg";
  },
};
</script>
