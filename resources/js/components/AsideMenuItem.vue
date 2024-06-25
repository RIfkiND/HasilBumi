<script setup>
import { ref, computed } from 'vue'
//import { Link } from 'vue-router'
import { mdiMinus, mdiPlus } from '@mdi/js'
import { getButtonColor } from '~/colors.js'
import BaseIcon from '~/components/BaseIcon.vue'
import AsideMenuList from '~/components/AsideMenuList.vue'
import { useDarkModeStore } from '~/stores/darkMode.js'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  item: {
    type: Object,
    required: true
  },
  isDropdownList: Boolean
})


const itemHref = computed(() => (props.item.route ? route(props.item.route) : props.item.href))

const activeInactiveStyle = computed(() =>
  props.item.route && route().current(props.item.route)
)
const emit = defineEmits(['menu-click'])

const hasColor = computed(() => props.item && props.item.color)

const asideMenuItemActiveStyle = computed(() =>
  hasColor.value ? '' : 'aside-menu-item-active font-bold'
)

const isDropdownActive = ref(false)

const componentClass = computed(() => [
  props.isDropdownList ? 'py-3 px-6 text-sm' : 'py-3',
  hasColor.value
    ? getButtonColor(props.item.color, false, true)
    : `aside-menu-item dark:text-slate-300 dark:hover:text-white`
])

const hasDropdown = computed(() => !!props.item.menu)

const menuClick = (event) => {
  emit('menu-click', event, props.item)

  if (hasDropdown.value) {
    isDropdownActive.value = !isDropdownActive.value
  }
}

</script>

<template>
  <li>
    <component
      :is="item.to ? Link : 'a'"
      :href="itemHref"
      :target="item.target ?? null"
      class="flex cursor-pointer"
      :class="activeInactiveStyle"
      @click="menuClick"
    >
      <BaseIcon
        v-if="item.icon"
        :path="item.icon"
        class="flex-none mt-5"
        :class="activeInactiveStyle"
        w="w-16"
        :size="18"
      />
      <span
        class="grow text-ellipsis line-clamp-1 mt-5 text-white font-bold"
        :class="[{ 'pr-12': !hasDropdown }, activeInactiveStyle]"
        >{{ item.label }}</span
      >
      <BaseIcon
        v-if="hasDropdown"
        :path="isDropdownActive ? mdiMinus : mdiPlus"
        class="flex-none mt-5"
        :class="activeInactiveStyle"
        w="w-12"
      />
    </component>
    <AsideMenuList
      v-if="hasDropdown"
      :menu="item.menu"
      :class="['aside-menu-dropdown', isDropdownActive ? 'block dark:bg-slate-800 bg-black' : 'hidden']"
      is-dropdown-list
    />
  </li>
</template>
