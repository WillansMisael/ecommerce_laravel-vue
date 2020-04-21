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
<<<<<<< HEAD
                products: [],
=======
                products: [
                    {title: 'Curso Ruby v2', price: 200, description: 'Hola mundo' },
                    {title: 'Curso Laravel', price: 500, description: 'Hola mundo' },
                ],
>>>>>>> a54af0937e32c96c356f689a0f51134142952ce3
                endpoint: "/productos"
            }
        },
        created(){
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
<<<<<<< HEAD
                axios.get(this.endpoint).then((response)=>{
                    console.log(response.data.data);
                    this.products = response.data.data;
                });
=======
                axios.get(this.endpoint).then(console.log);
>>>>>>> a54af0937e32c96c356f689a0f51134142952ce3
            }
        }
    }
</script>