const routes = [

    {path: '/', component: () => import('../pages/Home.vue'), name: 'home'},

    {path: '/about', component: () => import('../pages/Shop.vue'), name: 'about'},

    {path: '/shop', component: () => import('../pages/Shop.vue'), name: 'shop'},

    {path: '/delivery', component: () => import('../pages/Shop.vue'), name: 'delivery'},

    {path: '/contacts', component: () => import('../pages/Shop.vue'), name: 'contacts'},

    {path: '/user-login', component: () => import('../pages/Login.vue'), name: 'login'},

    {path: '/:catchAll(.*)', component: () => import('../pages/404.vue'), name: '404'},

]

export default routes;
