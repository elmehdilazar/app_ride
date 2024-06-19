import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ServiceView from '../views/ServiceView.vue'
import LocationsView from '../views/LocationsView.vue'
import DriversView from '../views/DriversView.vue'
import CarsView from '../views/CarsView.vue'
import GaragesView from '../views/GaragesView.vue'



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
       {
         path: '/services',
         name: 'services',
         component: ServiceView,
    },
         {
           path: '/locations',
           name: 'locations',
           component: LocationsView,
    },
     {
       path: '/drivers',
       name: 'drivers',
       component: DriversView,
    },
     {
       path: '/cars',
       name: 'cars',
       component: CarsView,
    },
      {
        path: '/garages',
        name: 'garages',
        component: GaragesView,
      },
           {
             path: '/services',
             name: 'services',
             component: ServiceView,
           },
     {
       path: '/home',
       name: 'home',
       component: HomeView
     }, 
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    }
  ]
})

export default router
