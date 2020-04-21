<template>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card">
            <header class="bg-primary padding">
            </header>
            <div class="card-body padding">
                <h2 class="card-title">{{ product.title }}</h2>
<<<<<<< HEAD
                <h4 class="card-subtitle">{{ product.humanprice }}</h4>
=======
                <h4 class="card-subtitle">{{ product.price }}</h4>
>>>>>>> a54af0937e32c96c356f689a0f51134142952ce3
                <p class="card-text">{{ product.description }}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        product: {
            type: Object
        }
    }
}
</script>