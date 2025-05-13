<template>
    <form class="flex flex-col space-y-4 p-4 border-2 border-yellow-200" action="">
        <h4 class="p-4 text-lg font-extrabold">Create Purchase Order</h4>
        <div class="flex flex-col space-y-2 mx-4 my-2">
            <label for="" class="text-sm text-gray-400">Type</label>
            <select v-model="purchaseOrderForm.type" name="" id="">
                <option v-for="purchaseOrderType in purchaseOrderTypes" :value="purchaseOrderType.value">
                    {{ purchaseOrderType.label }}
                </option>
            </select>
        </div>
        <div class="flex flex-col space-y-2 mx-4 my-2">
            <label for="" class="text-sm text-gray-400"></label>
            <input type="text">
        </div>
        <div class="mx-4 mt-4">
            <button>Submit</button>
        </div>
    </form>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import axios from 'axios';
export default {

    mounted() {
        axios.get('/api/enum/purchase_order').then(response => {
            this.purchaseOrderTypes = response.data
        }).catch(error => {
            console.log(error);
        })
    },
    data() {
        return {
            purchaseOrderForm: useForm({
                type: null,
                status: null,
                client_id: null
            }),
            purchaseOrderTypes: []
        }
    }
}
</script>
