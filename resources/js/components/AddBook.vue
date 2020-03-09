<template>
    <div>
        <h3 class="text-center">Add Book</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBook">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="book.name">
                    </div>

                    <div class="form-group">
                        <label>Auhtor</label>
                        <input type="text" class="form-control" v-model="book.author">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Book</button>
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
  methods: {
    addBook() {
      this.axios;
      axios
        .post("/api/book/add", this.book)
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

