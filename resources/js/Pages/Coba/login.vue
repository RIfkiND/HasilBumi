<script setup>
import { useForm } from "@inertiajs/vue3";
import { usePage } from '@inertiajs/inertia-vue3';

defineProps({ errors: Object });

const form = useForm({
  email: null,
  password: null,
  remember: false,
});

const { post, route } = usePage().$inertia;

const handleLogin = async () => {
  // Submit the form
  const response = await form.post(route('auth.login'));

  // If login is successful, show success message and then redirect
  if (response.ok) {
    showSuccessAlert();
    redirectToMainPage();
  }
};

const showSuccessAlert = () => {
  Swal.fire({
    icon: 'success',
    title: 'Login Successful!',
    text: 'You have successfully logged in.',
  });
};

const redirectToMainPage = () => {
  // Redirect to main page after 2 seconds
  setTimeout(() => {
    route('/');
  }, 2000);
};
</script>

<template>
  <form method="POST" @submit.prevent="handleLogin">
    <!-- Email input -->
    <!-- Your form inputs here -->

    <!-- Submit button -->
    <button
      type="submit"
      class="w-full bg-teal text-md p-2 rounded-lg mb-3 text-white hover:bg-teal-dark d-inline-block justify-center align-center text-decoration-none text-center mx-auto"
    >
      Sign In
    </button>
  </form>
</template>
