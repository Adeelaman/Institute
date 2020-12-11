<template>
    <div>
        <button class="btn btn-primary" @click="followUser">Enroll Now</button>
    </div> 
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        method: {
            followUser () {
                alert('inside');
            }
        }
    }
</script>
