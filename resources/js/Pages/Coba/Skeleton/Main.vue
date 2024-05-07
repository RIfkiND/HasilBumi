<template>
    <v-container>
      <v-row>
        <v-col cols="12" md="6">
          <v-skeleton-loader
            class="mx-auto border"
            max-width="300"
            type="card-avatar, actions"
          ></v-skeleton-loader>
        </v-col>

        <v-col cols="12" md="6">
          <v-skeleton-loader
            class="mx-auto border"
            max-width="300"
            type="image, article"
          ></v-skeleton-loader>
        </v-col>
      </v-row>
    </v-container>
  </template>

<script setup></script>

<!-- <template>
    <Suspense>
        <template #default>
            <ProfileCard/>
        </template>
        <template #fallback>
            <profile-skeleton/>
        </template>
    </Suspense>
</template>

<script setup>
import ProfileCard from './ProfileCard.vue';

import ProfileSkeleton from './ProfileSkeleton.vue';
</script> -->
