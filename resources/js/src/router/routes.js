const routes = [

    {path: '/', component: () => import('../pages/Home.vue'), name: 'home'},

    {path: '/shop', component: () => import('../pages/Shop.vue'), name: 'shop'},

]

export default routes;
