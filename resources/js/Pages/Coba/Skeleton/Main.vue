<template>
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
</script>
