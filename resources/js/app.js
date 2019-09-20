

require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('message',require('./components/message.vue').default);

const app = new Vue({
    el: '#app',
    data:{
    	message:'',
        chat:{
    	    message:[]
        }
    },
    methods:{
    	send:function send()
    	{
    	    if(this.message.length!==0)
            {
                this.chat.message.push(this.message)
                this.message=''
            }
    	}
    }
});
