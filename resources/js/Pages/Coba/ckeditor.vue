<template>
    <form @submit.prevent="store">
      <ckeditor :editor="editor" v-model="form.content" :config="editorConfig" />
    </form>
  </template>

  <script setup>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
  import {ref} from 'vue';
  const form = ref({
    content: null,
  });

  const editor = ref(ClassicEditor);

  const editorConfig = {
    height: '450px',
    toolbar: [
      'heading',
      '|',
      'bold',
      'italic',
      'link',
      'bulletedList',
      'numberedList',
      '|',
      'insertTable',
      '|',
      'mediaEmbed',
      '|',
      'undo',
      'redo',
    ],
    table: {
      toolbar: ['tableColumn', 'tableRow', 'mergeTableCells'],
    },
    language: 'nl',
  };

  const store = () => {
    // Your store logic here
  };
  </script>
