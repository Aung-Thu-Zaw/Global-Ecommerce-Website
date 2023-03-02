<script setup>
import SocialiteAuth from "@/Components/Form/SocialiteAuth.vue";
import FormButton from "@/Components/Form/FormButton.vue";
import Checkbox from "@/Components/Form/Checkbox.vue";
import FormContainer from "@/Components/Form/FormContainer.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/Form/InputError.vue";
import InputLabel from "@/Components/Form/InputLabel.vue";
import TextInput from "@/Components/Form/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <GuestLayout>
    <Head title="Login" />

    <FormContainer>
      <div
        v-if="status"
        class="mb-4 font-medium text-sm text-green-500 bg-green-100 p-3 w-full rounded-md text-center"
      >
        {{ status }}
      </div>
      <form @submit.prevent="submit" class="w-full">
        <h1 class="text-center text-2xl text-dark mb-5 font-bold">
          Admin Dashboard Login
        </h1>

        <div class="mb-3">
          <InputLabel for="email" value="Email" />

          <TextInput
            id="email"
            type="email"
            class="mt-1 block w-full"
            v-model="form.email"
            required
            autocomplete="username"
            placeholder="Enter Your Email Address"
          >
            <template v-slot:icon>
              <span>
                <i class="fa-solid fa-envelope text-gray-600"></i>
              </span>
            </template>
          </TextInput>

          <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="mb-3">
          <InputLabel for="password" value="Password" />

          <TextInput
            id="password"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password"
            required
            autocomplete="new-password"
            placeholder="Enter Password"
          >
            <template v-slot:icon>
              <span>
                <i class="fa-solid fa-lock text-gray-600"></i>
              </span>
            </template>
          </TextInput>

          <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="flex items-center justify-between mb-5">
          <div>
            <label class="flex items-center">
              <Checkbox name="remember" v-model:checked="form.remember" />
              <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
          </div>

          <div>
            <Link
              v-if="canResetPassword"
              :href="route('password.request')"
              class="underline text-sm text-gray-600 rounded-md hover:text-blue-500"
            >
              Forgot your password?
            </Link>
          </div>
        </div>

        <div class="mb-3">
          <FormButton
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Login
          </FormButton>
        </div>
      </form>
    </FormContainer>
  </GuestLayout>
</template>