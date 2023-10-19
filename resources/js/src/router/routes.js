const routes = [

    {path: '/', component: () => import('../pages/Home.vue'), name: 'index'},

    {path: '/about', component: () => import('../pages/About.vue'), name: 'about'},

]

export default routes;
