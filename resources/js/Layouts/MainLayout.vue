<script setup>
import {computed} from 'vue'
import { Link ,usePage } from '@inertiajs/vue3'

const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>
<template>
      <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white w-full">
      <div class="container mx-auto">
        <nav class="p-4 flex items-center justify-between">
          <div class="text-lg font-medium"><Link href="/listing">All listings</Link></div>
          <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
            <Link href="/">LaraHouse</Link>
          </div>
          <div class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
            <Link href="/listing/create">+ New Listing</Link>
          </div>
          
        </nav>
      </div>
      </header>
      <main class="container mx-auto p-4">
        <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
            {{ flashSuccess }}
          </div>
        <slot></slot>
      </main>
      <footer>
        <p>© 2024 Your Company</p>
      </footer>
  </template>

  
  <script>
  export default {
    name: 'MainLayout'
  }
  </script>
  