const app = Vue.createApp({
    //data, function
    // template: '<strong>My very own Portfoltio</strong>'


    //functtion example
    data() {
        return { //data property
            showContent: true,
            users: [ //array
                { Dish: 'Adobo', Price: 50, img: 'assets/img/1.jpg', isFav: true },
                { Dish: 'Kare Kare', Price: 35, img: 'assets/img/2.jpg', isFav: false },
                { Dish: 'Sinigang na Baboy', Price: 45, img: 'assets/img/3.jpg', isFav: true },
            ],
            title: 'My Portfolio',
            author: 'Ace Pocholo Aguilar',
            age: 27,
            x: 0,
            y: 0,
            url: 'https://flowplan.site',
        }
    },
    methods: { // base on events similar to HTML onclick=title()
        // changeTitle(title) {
        //     // this.title = 'My Very Own Page'
        //     this.title = title
        // }

        toggleShowContent() { //toggle
            this.showContent = !this.showContent//follows the true or false 
        },
        handleEvent(e, data) {//mouse events
            if (data) {
                console.log(e, e.type)
            }
        },
        handleMouseMove(e) { // detect the X and Y of mouse position inside a box
            this.x = e.offsetX
            this.y = e.offsetY
        },
        toggleFav(users) { // toggle binds
            users.isFav = !users.isFav
        }
    },
    computed: { //filter array 
        filteredUsers() {
            return this.users.filter((user) => user.isFav) //
        }
    }
})

app.mount('#app')