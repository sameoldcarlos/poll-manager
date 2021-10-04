<template>
    <div class="card text-center text-light">
            <div class="card-header bg-dark">
                <span class="text-muted created-by">Enquete criada por</span> 
                {{ author_name }}
            </div>
            <div class="card-body bg-light text-dark">
                <h5 class="card-title">{{ title }}</h5>
                <p class="card-text">{{ question }}</p>
                <a v-if="total_votes>=1" :href="'/public/show-results/' + id" class="btn btn-outline-primary">Ver resultados</a>
                <a :href="'/public/vote/' + id" class="btn btn-primary">Votar nesta enquete</a>
            </div>
            <div class="card-footer bg-dark text-muted">
                {{ date }}
            </div>
        </div>
</template>

<script>
    export default {
        props: ['author_name', 'title', 'question', 'id', 'date', 'total_votes'],
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>

<style scoped>
    .card {
        margin: 30px 0;
    }
    .created-by {
        display: inline-block;
        width: 100%;
        text-align: center;
    }
</style>
