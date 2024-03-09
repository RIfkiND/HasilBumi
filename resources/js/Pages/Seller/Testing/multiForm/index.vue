<script setup>
import StepOne from "./Step1.vue";
import StepTwo from "./Step2.vue";
import StepThree from "./Step3.vue";

</script>

<template>
    <div class="flex justify-center items-center h-screen">
        <FormKit type="form" :actions="false">
          <FormKit type="multi-step" tab-style="tab" class="max-w-lg">
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
