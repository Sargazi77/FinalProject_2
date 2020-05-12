<template>
  <button @click="addNote" class="new-note-btn">Add New Work Order</button>
</template>

<script>
  export default {
    name: "AddNewButton",
    methods: {
      addNote() {
        this.$emit('addNote')
      }
    }
  }
</script>

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
  .new-note-btn {
    width: 200px;
    display: block;
    margin: 0 auto 20px;
    background-color: rgb(190, 181, 219);
    padding: 10px 32px;
    border: 1px solid #e0e0e0;
    font-size: 26px;
    outline: 5;
    transition: all 0.3s;
    cursor: pointer;
    font-family: 'Alfa Slab One', cursive;

    &:hover {
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    &:active {
      position: relative;
      top: 1px;
    }
  }
</style>
