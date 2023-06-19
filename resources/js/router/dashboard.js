const dashboard = () =>import ( '../components/Dashboard.vue')

export default [
    {
        path: '/blog-backend',
        component: dashboard,
        name: 'dashboard',
    },
]
