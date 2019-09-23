// CreatePost.vue

<template>
  <div>
    <div class="row">
      <div class="col-md-8 offset-md-2 bg-white border rounded box-shadow p-5">
        <h1>Create A Post</h1>
        <form @submit.prevent="addPost">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Post Title:</label>
                <input type="text" class="form-control" v-model="post.title" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Post Body:</label>
                <textarea class="form-control" v-model="post.body" rows="5"></textarea>
              </div>
            </div>
          </div>
          <br />
          <div class="form-group">
            <button class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      post: {}
    };
  },
  methods: {
    addPost() {
      console.log(this.post);
    }
  }
};
</script>
