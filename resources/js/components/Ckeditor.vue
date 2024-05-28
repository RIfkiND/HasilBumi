<template>
    <div>
      <ckeditor
        :editor="editor"
        v-model="editorData"
        :config="editorConfig"
        @ready="onReady"
        @change="onChange"
      ></ckeditor>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { CKEditor } from '@ckeditor/ckeditor5-vue';
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
  
  const editor = ref(ClassicEditor);
  const editorData = ref('');
  const editorConfig = ref({
    toolbar: [
      'heading', '|',
      'bold', 'italic', 'link', '|',
      'bulletedList', 'numberedList', '|',
      'blockQuote', 'insertTable', 'undo', 'redo'
    ]
  });
  
  const onReady = (editorInstance) => {
    console.log('Editor is ready to use!', editorInstance);
  };
  
  const onChange = (event, editorInstance) => {
    editorData.value = editorInstance.getData();
    console.log({ event, editorInstance, editorData: editorData.value });
  };
  </script>
  