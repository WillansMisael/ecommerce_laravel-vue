<template>
    <section>
        <div class="row">
           <product-card-component v-bind:product="product" v-for="product in products"> 
           </product-card-component>
        </div>
    </section>
</template>

<script>
    export default {
        data(){
            return {
                name: 'Product Component',
                products: [
                    {title: 'Curso Ruby v2', price: 200, description: 'Hola mundo' },
                    {title: 'Curso Laravel', price: 500, description: 'Hola mundo' },
                ],
                endpoint: "/productos"
            }
        },
        created(){
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
                axios.get(this.endpoint).then(console.log);
            }
        }
    }
</script>