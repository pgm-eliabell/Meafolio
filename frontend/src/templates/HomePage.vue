<template>
  <div class="home-container">
    <header class="navbar">
      <h1>MeaFolio</h1>
      <nav>
        <ul>
          <li><router-link to="/portfolios">Portfolios</router-link></li>
          <li><router-link to="/posts">Posts</router-link></li>
          <li><router-link to="/explore">Explore</router-link></li>
          <li><router-link to="/profile">My Profile</router-link></li>
        </ul>
      </nav>
    </header>

    <section class="hero">
      <h2>Showcase Your Work. Connect. Inspire.</h2>
      <p>Create and customize your portfolio, share your experiences, and engage with others.</p>
      <router-link to="/create" class="cta-button">Start Building</router-link>
    </section>

    <section class="latest-portfolios">
      <h3>Featured Portfolios</h3>
      <div class="portfolio-grid">
        <PortfolioCard v-for="portfolio in portfolios" :key="portfolio.id" :portfolio="portfolio" />
      </div>
    </section>

    <section class="latest-posts">
      <h3>Recent Posts</h3>
      <div class="post-list">
        <PostCard v-for="post in posts" :key="post.id" :post="post" />
      </div>
    </section>
  </div>
</template>

<script>
import PortfolioCard from '@/components/PortfolioCard.vue';
import PostCard from '@/components/PostCard.vue';

export default {
  components: { PortfolioCard, PostCard },
  data() {
    return {
      portfolios: [
        { id: 1, name: 'John Doe', image: 'portfolio1.jpg', link: '/portfolio/1' },
        { id: 2, name: 'Jane Smith', image: 'portfolio2.jpg', link: '/portfolio/2' }
      ],
      posts: [
        { id: 1, title: 'How to Build a Portfolio', content: 'Some preview text...', link: '/post/1' },
        { id: 2, title: 'Tips for Networking', content: 'Some preview text...', link: '/post/2' }
      ]
    };
  }
};
</script>

<style scoped>
.home-container {
  font-family: Arial, sans-serif;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 0;
  border-bottom: 2px solid #ddd;
}
.navbar ul {
  display: flex;
  gap: 15px;
  list-style: none;
}

.hero {
  text-align: center;
  padding: 50px 20px;
  background: #f4f4f4;
  border-radius: 10px;
}
.cta-button {
  display: inline-block;
  margin-top: 10px;
  padding: 10px 20px;
  background: #007bff;
  color: white;
  border-radius: 5px;
  text-decoration: none;
}

.latest-portfolios, .latest-posts {
  margin-top: 40px;
}
.portfolio-grid, .post-list {
  display: flex;
  gap: 20px;
}
</style>