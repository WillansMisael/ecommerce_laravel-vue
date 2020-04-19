<template>
    <section>
        <div class="row">
            <div v-for="product in products" class="col-xs-12 col-sm-6 col-md-4">
                <div class="card">
                    <header class="bg-primary padding">
                    </header>
                    <div class="card-body padding">
                        <h2 class="card-title">{{ product.title }}</h2>
                        <h4 class="card-subtitle">{{ product.price }}</h4>
                        <p class="card-text">{{ product.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data(){
            return {
                name: 'Product Component',
                products: [
                    {title: 'Curso Ruby', price: 200, description: 'Hola mundo' },
                    {title: 'Curso Laravel', price: 500, description: 'Hola mundo' },
                ]
            }
        }
    }
</script>