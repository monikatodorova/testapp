// Example component in Vue.js

<template>
  <div>
    <h2>Posts</h2>
    <h2>Posts</h2>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <strong>{{ post.title }}</strong>
        <p>{{ post.content }}</p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
    };
  },
  mounted() {
    this.fetchPosts();
  },
  methods: {
    async fetchPosts() {
      try {
        const response = await fetch('http://localhost:8080/api/posts');
        console.log(response);
        const data = await response.json();
        this.posts = data;
      } catch (error) {
        console.error('Error fetching posts:', error);
      }
    },
  },
};
</script>
