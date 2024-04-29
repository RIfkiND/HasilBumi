<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

const form = useForm({
    name: "",
    email: "",
    description: "",
    location: "",
});

const formStep = ref(1);

const submit = () => {
    form.post(route("auth.Seller.Register"), {
        onSuccess: () => {
            form.reset(), (formStep.value = 1);
        },
    });
};

function nextStep() {
    Inertia.post(route("auth.Seller.Register.first"),
        {
            name: form.name,
            body: form.email,
        },
        {
            onSuccess: () => {
                formStep.value++;
            },
        }
    );
}
function prevStep() {
    formStep.value--;
}
</script>

<template>
    <form>
        <div v-if="formStep == 1">
            <div>
                <label for="name" value="Name" />
                <input
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                />
            </div>

            <div class="mt-4">
                <label for="body" value="Body" />
                <input
                    id="body"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                />
            </div>
        </div>

        <div v-if="formStep == 2">
            <div class="mt-4">
                <label for="user_name" value="User Name" />
                <input
                    id="user_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.description"
                />
            </div>

            <div class="mt-4">
                <label for="address" value="Address" />
                <input
                    id="address"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.location"
                />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <Button
                class="ml-4"
                v-if="formStep == 1"
                type="button"
                @click="nextStep"
            >
                Next
            </Button>
            <Button
                class="ml-4"
                v-if="formStep == 2"
                type="button"
                @click="prevStep"
            >
                Prev
            </Button>
            <Button
                class="ml-4"
                v-if="formStep == 2"
                type="button"
                @click="submit"
            >
                Create
            </Button>
        </div>
    </form>
</template>

