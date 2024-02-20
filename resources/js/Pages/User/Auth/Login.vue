<template>
  <v-container>
    <v-row align="center" justify="center">
      <v-col cols="12" sm="10">
        <v-card class="elevation-6 mt-10">
          <v-window v-model="step">
          <!-- Slide 1 -->
            <v-window-item :value="1">
              <v-row>
                <v-col cols="12" md="6">
                  <v-card-text class="mt-12 mb-12">
                    <h2 class="text-center">Masuk ke Akun Anda</h2>
                    <p class="text-center grey--text mt-3 mb-0">
                      Masuk ke akun Anda sehingga Anda dapat terus membangun <br />dan
                      mengedit alur orientasi Anda
                    </p>
                    <v-row align="center" justify="center">
                      <v-col cols="12" sm="8">
                        <v-text-field
                          label="Email"
                          outlined
                          dense
                          :color="colorDominan"
                          autocomplete="false"
                          class="mt-16"
                        />
                        <v-text-field
                          label="Password"
                          outlined
                          dense
                          :color="colorDominan"
                          autocomplete="false"
                          type="password"
                        />
                        <v-row>
                          <v-col cols="6" sm="7">
                            <v-checkbox label="Ingatkan saya" class="mt-n1" :color="colorDominan"></v-checkbox>
                          </v-col>
                          <v-col cols="12" sm="5">
                            <span class="caption blue--text"><a href="#" class="forget blue--text">Lupa password</a></span>
                          </v-col>
                        </v-row>
                        <v-btn :color="colorDominan" dark block tile>Login</v-btn>
                        <h5 class="text-center grey--text mt-4 mb-3">Atau masuk menggunakan</h5>
                        <div
                          class="d-flex justify-content-center align-center mb-16 text-center"
                        >
                          <v-btn depressed block outlined color="grey">
                            <img :src="imageUrl" alt="Logo google" width="20" height="20" class="rounded-circle"> <a href="https://accounts.google.com/" color="grey" class="forget">
                              Login with Google
                            </a>
                          </v-btn>
                        </div>
                      </v-col>
                    </v-row>
                  </v-card-text>
                </v-col>
                <v-col cols="12" md="6" class="color-bg rounded-bl-xl elevation-6">
                  <div style="text-align: center; padding: 180px 25px">
                    <v-card-text class="white--text">
                      <h2 class="text-center">Belum Punya Akun?</h2>
                      <p class="text-center mt-3">
                        Mari persiapkan semuanya sehingga Anda dapat mulai membuat milik Anda sendiri
                        pertama <br/> pengalaman orientasi
                      </p>
                    </v-card-text>
                    <div class="text-center">
                      <v-btn tile outlined dark @click="step++">Sign Up</v-btn>
                    </div>
                  </div>
                </v-col>
              </v-row>
            </v-window-item>

            <!-- Slide 2 -->
            <v-window-item :value="2">
              <v-row>
                <v-col cols="12" md="6" class=" color-bg rounded-br-xl elevation-6">
                  <div style="text-align: center; padding: 180px 0px">
                    <v-card-text class="white--text">
                      <h2 class="text-center">Sudah Mendaftar Akun?</h2>
                      <p class="text-center mt-3">
                        Masuk ke akun Anda sehingga Anda dapat terus membangun <br/> dan
                        mengedit alur orientasi Anda
                      </p>
                    </v-card-text>
                    <div class="text-center">
                      <v-btn tile outlined dark @click="step++">Login</v-btn>
                    </div>
                  </div>
                </v-col>

                <v-col cols="12" md="6">
                  <v-card-text class="mt-12">
                    <h2 class="text-center">Mendaftar untuk sebuah Akun</h2>
                    <p class="text-center grey--text mt-3">
                      Mari kita persiapkan semuanya sehingga Anda dapat  <br/> mulai membuat Anda
                      pengalaman <br/> orientasi pertama
                    </p>
                    <v-row align="center" justify="center">
                      <v-col cols="12" sm="8">
                        <v-text-field
                          label="Username"
                          outlined
                          dense
                          :color="colorDominan"
                          autocomplete="false"
                          class="mt-4"
                        />
                        <v-text-field
                          label="Email"
                          outlined
                          dense
                          :color="colorDominan"
                          autocomplete="false"
                        />
                        <v-text-field
                          label="Password"
                          outlined
                          dense
                          :color="colorDominan"
                          autocomplete="false"
                          type="password"
                        />
                        <v-row>
                          <v-col cols="12" sm="7">
                            <v-checkbox label="I Accpet All" class="mt-n1" :color="colorDominan">
                            </v-checkbox>
                          </v-col>
                          <v-col cols="12" sm="5">
                            <span class="caption blue--text ml-n4 forget"
                              >Syarat & Ketentuan</span
                            >
                          </v-col>
                        </v-row>
                        <v-btn :color="colorDominan" dark block tile>Sign up</v-btn>
                        <h5 class="text-center grey--text mt-4 mb-3">Atau mendaftar dengan</h5>
                        <v-btn depressed block outlined color="grey" class="mb-12">
                          <img :src="imageUrl" alt="Logo google" width="20" height="20" class="rounded-circle"> <a href="https://accounts.google.com/" color="grey" class="forget">
                            Login with Google
                          </a>
                        </v-btn>
                      </v-col>
                    </v-row>
                  </v-card-text>
                </v-col>
              </v-row>
            </v-window-item>
          </v-window>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
      step: 1,
      imageUrl: "",
      colorDominan:""
    }),
    mounted() {
      this.imageUrl = "/assets/img/logo-gg.png",
      this.colorDominan = "#3CB72B"
    },
    props: {
      source: String,
    },
  };
</script>
<style scoped>
  .v-application .rounded-bl-xl {
    border-bottom-left-radius: 300px !important;
  }
  .v-application .rounded-br-xl {
    border-bottom-right-radius: 300px !important;
  }

  a {
    color: grey;
    text-transform: capitalize;
    padding: 5px;
    text-decoration: none;
    letter-spacing: 0px;
  }

  .forget:hover {
    text-decoration: underline;
    cursor: pointer;
  }

  .color-bg {
    background-color: #3CB72B;
  }

  .color-text {
    color:#3CB72B;
  }
</style>
