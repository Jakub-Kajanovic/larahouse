<template>
    <Box>
        <div>
        <Link :href="`/listing/${listing.id}`">
            <div class="flex items-center gap-1">
                <Price :price="listing.price" class="text-xl font-bold"/>
                <div class="text-xs text-gray-500">
                    <Price :price="monthlyPayment"/> pm
                </div>
            </div>
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
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import Price from '@/Components/Price.vue'
import ListingAdress from '@/Components/ListingAdress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Box from '@/Components/UI/Box.vue'
import { useMonthlyPayment } from '@/Composables/useMonthlyPayment'
const props = defineProps({listing: Object})
const { monthlyPayment } = useMonthlyPayment(
  props.listing.price, 2.5, 25,
)
</script>