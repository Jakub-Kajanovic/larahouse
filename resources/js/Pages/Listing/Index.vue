<template>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">
        <div>
        <Link :href="`/listing/${listing.id}`">
            <Price :price="listing.price" class="text-xl"/>
            <ListingSpace :listing="listing" class="text-lg"/>
            <ListingAdress :listing="listing" class="text-gray-400"/>
        </Link>
        </div>
        <div>
            <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
        </div>
        <div>
            <Link :href="`/listing/${listing.id}`" method="DELETE" as="button">Delete</Link>
        </div>
    </Box>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import Price from '@/Components/Price.vue'
import ListingAdress from '@/Components/ListingAdress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Box from '@/Components/UI/Box.vue'
defineProps({
    listings: Array,
})
</script>