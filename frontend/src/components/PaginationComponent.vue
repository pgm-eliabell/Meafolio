<!-- PaginationComponent.vue -->
<template>
    <div class="pagination">
      <button @click="prevPage" :disabled="currentPage === 1">Previous</button>
      <span>Page {{ currentPage }} of {{ totalPages }}</span>
      <button @click="nextPage" :disabled="currentPage === totalPages">Next</button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      totalItems: {
        type: Number,
        required: true
      },
      itemsPerPage: {
        type: Number,
        default: 6
      }
    },
    data() {
      return {
        currentPage: 1
      };
    },
    computed: {
      totalPages() {
        return Math.ceil(this.totalItems / this.itemsPerPage);
      }
    },
    methods: {
      nextPage() {
        if (this.currentPage < this.totalPages) {
          this.currentPage++;
          this.$emit('page-changed', this.currentPage);
        }
      },
      prevPage() {
        if (this.currentPage > 1) {
          this.currentPage--;
          this.$emit('page-changed', this.currentPage);
        }
      }
    }
  };
  </script>
  
  <style scoped>
  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }
  button {
    margin: 0 10px;
    padding: 5px 10px;
  }
  </style>