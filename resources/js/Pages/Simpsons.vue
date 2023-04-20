<template>
    <div>
        <h1>Simpsons Characters</h1>
        <ul>
            <li v-for="simpson in simpsons" :key="simpson.id">
                <h2>{{ simpson.name }}</h2>
                <p>{{ simpson.quote }}</p>
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: "Simpsons",
    data() {
        return {
            simpsons: [],
        }
    },
    async mounted() {
        let characters = await axios.get('/api/characters')
        this.simpsons = characters.data
    },
}
</script>
