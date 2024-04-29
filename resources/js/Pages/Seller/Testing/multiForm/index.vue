<script setup>
import StepOne from "./Step1.vue";
import StepTwo from "./Step2.vue";
import StepThree from "./Step3.vue";

import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

const form = reactive({
    first_name: null,
    last_name: null,
    email: null,
});

function submit() {
    router.post("/users", form);
}
</script>

<template>
    <div class="flex justify-center">
        <FormKit type="form" :actions="false">
            <FormKit
                type="multi-step"
                tab-style="progress"
                :hide-progress-labels="true"
            >
                <FormKit type="step" name="personalInfo">
                    <StepOne />
                </FormKit>

                <FormKit type="step" name="references">
                    <StepTwo />
                </FormKit>

                <FormKit type="step" name="Supplemental">
                    <StepThree />

                    <!-- using step slot for submit button-->
                    <template #stepNext>
                        <FormKit type="submit" />
                    </template>
                </FormKit>
            </FormKit>
        </FormKit>
    </div>
</template>
