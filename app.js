const app = Vue.createApp({
    data() {
        return {
            a: 0,
            b: 0,
            age: 20
        };
    },
    computed: {
        addToA() {
            console.log('addtoA');
            return this.age + this.a;
        },
        addToB() {
            return this.age + this.b;
        }
    }

});

app.mount("#vue-app");

