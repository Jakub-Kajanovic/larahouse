<script setup>
import {computed} from 'vue'
import { Link ,usePage } from '@inertiajs/vue3'

const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
// import {ref} from 'vue'

// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>
<template>
    <div>
      <header>
        <nav>
          <!-- Navigation Links -->
          <Link href="/listing">All listings</Link>
          <Link href="/listing/create">Create a listing</Link>
          <div v-if="flashSuccess" class="success">
            {{ flashSuccess }}
          </div>
          <!-- <div>The page with time {{ timer }}</div> -->
        </nav>
      </header>
      <main>
        <slot></slot>
      </main>
      <footer>
        <p>© 2024 Your Company</p>
      </footer>
    </div>
  </template>

  
  <script>
  export default {
    name: 'MainLayout'
  }
  </script>
  
  <style scoped>

  header {
    background: #333;
    color: white;
    padding: 1rem;
  }
  nav a {
    color: white;
    margin-right: 1rem;
  }
  footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 1rem;
    position: fixed;
    width: 100%;
    bottom: 0;
  }
  .success {
    background-color: green;
    color: white;
  }
  </style>
  