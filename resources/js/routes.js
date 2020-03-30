import VueRouter from 'vue-router';

let routes = [

  {
      path:'/example',
      name: 'example',
  	component:require('./components/ExampleComponent')
  },

];

export default new VueRouter({
   routes
});
