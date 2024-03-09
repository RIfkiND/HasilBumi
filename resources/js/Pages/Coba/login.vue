<script setup>
import { useForm } from "@inertiajs/vue3";
defineProps({ errors: Object });

const form = useForm({
  email: null,
  password: null,
  remember: false,
})
</script>


  <template>
    <form method="POST" @submit.prevent="form.post(route('auth.login'))">
        <!-- Email input -->
        <div class="py-2">
            <label for="email" class="mb-2 text-md text-textColor">
                Email <span class="text-danger">*</span>
            </label>
            <input
                type="email"
                class="w-full bg-white p-2 border border-gray-300 rounded-md focus:border-colorBorder"
                name="email"
                id="email"
                v-model="form.email"
                autocomplete="false"
            />
            <div v-if="form.errors.email">
                <span class="text-red-500"> {{ form.errors.email }} </span>
            </div>
            <!-- Display error message -->
        </div>

        <!-- Password input -->
        <div class="py-2">
            <label for="password" class="mb-2 text-md text-textColor">
                Password <span class="text-danger">*</span>
            </label>
            <input
                type="password"
                name="password"
                id="password"
                autocomplete="false"
                v-model="form.password"
                class="w-full bg-white p-2 border border-gray-300 rounded-md focus:border-colorBorder"
            />
            <div v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</div> <!-- Display error message -->
        </div>

        <!-- Remember me checkbox -->
        <div class="flex justify-between w-full py-4">
            <div class="mr-24">
                <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                    class="mr-2 hover:cursor-pointer"
                    style="accent-color: #3cb72b"
                    v-model="form.remember"
                />
                <span class="text-md">Remember me</span>
            </div>
            <Link
                :href="route('forget-password')"
                class="text-textColor text-decoration-none hover:cursor-pointer hover:text-teal"
            >Forget password ?</Link>
        </div>

        <!-- Submit button -->
        <button
            type="submit"
            class="w-full bg-teal text-md p-2 rounded-lg mb-3 text-white hover:bg-teal-dark d-inline-block justify-center align-center text-decoration-none text-center mx-auto"
        >
            Sign In
        </button>
    </form>
</template>

