<template>
<div>
    <h3 class="text-center">Edit Book</h3>
    <div class="row">
        <div class="col-md-6">
            <form @submit.prevent="updateBook">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" v-model="book.name">
                </div>

                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" v-model="book.author">
                </div>

                <button type="submit" class="btn btn-primary">Update Book</button>

            </form>
        </div>
    </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      book: {}
    };
  },

  created() {
    this.axios.get(`/api/book/edit/${this.$route.params.id}`).then(response => {
      this.book = response.data;
      console.log("EDIT DATA", response.data);
    });
  },
  methods: {
    updateBook() {
      this.axios;
      axios
        .post(`/api/book/update/${this.$route.params.id}`, this.book, {
          headers: {
            "Content-Type": "application/json"
          }
        })
        .then(response => {
          console.log(response);
          this.$router.push({ name: "home" });
        })
        .catch(err => {
          console.error(err);
        })
        .finally(() => (this.loading = false));
    }
  }
};
</script>
