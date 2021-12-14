import store from '@/state/store'

export default [

    {
        path:'/',
        name:'home',
        component: () => import('./views/home/Main'),
        meta: {
            authRequired: false,
        }
    },
    {
        path: '/carousel-data',
        name: 'carousel-data',
        component: () => import('./views/admin/landingPage/Carousel'),
        meta: {
            authRequired: false,
        }
    },
    {
        path: '/products',
        name: 'products',
        component: () => import('./views/admin/landingPage/Product'),
        meta: {
            authRequired: false,
        }
    },
    // user login page
    {
        path: '/login',
        name: 'login',
        component: () => import('./views/admin/account/login'),
        meta: {
            beforeResolve(routeTo, routeFrom, next) {
                // If the user is already logged in
                if (store.getters['auth/loggedIn']) {
                    // Redirect to the home page instead
                    next({name: 'carousel-data'})
                } else {
                    // Continue to the login page
                    next()
                }
            },
        },
    },

    {
        path: '/register',
        name: 'register',
        component: () => import('./views/admin/account/register'),
        meta: {
            beforeResolve(routeTo, routeFrom, next) {
                // If the user is already logged in
                if (store.getters['auth/loggedIn']) {
                    // Redirect to the home page instead
                    next({name: 'carousel-data'})
                } else {
                    // Continue to the login page
                    next()
                }
            },
        },
    },

    // forget password page url
    {
        path: '/forgot-password',
        name: 'forgot-password',
        component: () => import('./views/admin/account/forgot-password'),
        meta: {
            beforeResolve(routeTo, routeFrom, next) {
                // If the user is already logged in
                if (store.getters['auth/loggedIn']) {
                    // Redirect to the home page instead
                    next({name: 'carousel-data'})
                } else {
                    // Continue to the login page
                    next()
                }
            },
        },
    },
    {
        path: '/reset-password/:token',
        name: 'reset-password',
        component: () => import('./views/admin/account/managePassword')
    },

    // logout
    {
        path: '/logout',
        name: 'logout',
        meta: {
            authRequired: true,
            beforeResolve(routeTo, routeFrom, next) {
                store.dispatch('auth/logOut').then(
                    next({name: 'login'})
                );
            },
        },
    },


]