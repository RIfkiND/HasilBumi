<script setup>
import { useForm } from "@inertiajs/vue3"
import BaseButton from "@/Components/BaseButton.vue"
import BaseButtons from "@/Components/BaseButtons.vue"
import BaseIcon from '@/Components/BaseIcon.vue'
import {
  mdiSquareEditOutline,
  mdiTrashCan,
} from "@mdi/js"

const props = defineProps({
  item: {
    type: Object,
    default: () => ({}),
  },
  menu: {
    type: Object,
    default: () => ({}),
  },
  can: {
    type: Object,
    default: () => ({}),
  },
  level: {
    type: Number,
    default: 0
  },
})

const formDelete = useForm({})

function destroy(id) {
  if (confirm("Are you sure you want to delete?")) {
    formDelete.delete(route("admin.menu.item.destroy", {menu: props.menu.id, item: id}))
  }
}

</script>

<template>
    <tr :key="item.id">
        <td data-label="Name">
            <div :style="{ 'margin-left': level*20 + 'px' }">
              <BaseIcon
                v-if="item.icon"
                :path="item.icon"
                class="flex-none"
                :size="18"
              />
              {{ item.name }}
            </div>
        </td>
        <td data-label="Description">
            {{ item.description }}
        </td>
        <td data-label="Enabled">
            {{ item.enabled }}
        </td>
        <td
        v-if="can.edit || can.delete"
        class="before:hidden lg:w-1 whitespace-nowrap"
        >
        <BaseButtons type="justify-start lg:justify-end" no-wrap>
            <BaseButton
            v-if="can.edit"
            :route-name="route('admin.menu.item.edit', {menu: menu.id, item: item.id})"
            color="info"
            :icon="mdiSquareEditOutline"
            small
            />
            <BaseButton
            v-if="can.delete"
            color="danger"
            :icon="mdiTrashCan"
            small
            @click="destroy(item.id)"
            />
        </BaseButtons>
        </td>
    </tr>
    <template v-for="item in item.children">
        <MenuItemList :item="item" :menu="menu" :can="can" :level="level + 1" />
    </template>
</template>