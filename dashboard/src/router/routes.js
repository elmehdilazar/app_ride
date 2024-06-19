import DashboardLayout from "@/layout/dashboard/DashboardLayout.vue";
// GeneralViews
import NotFound from "@/pages/NotFoundPage.vue";

// Admin pages
const Dashboard = () =>
  import(/* webpackChunkName: "dashboard" */ "@/pages/Dashboard.vue");
const Profile = () =>
  import(/* webpackChunkName: "common" */ "@/pages/Profile.vue");
const Notifications = () =>
  import(/* webpackChunkName: "common" */ "@/pages/Notifications.vue");
const Icons = () =>
  import(/* webpackChunkName: "common" */ "@/pages/Icons.vue");
const Maps = () => import(/* webpackChunkName: "common" */ "@/pages/Maps.vue");
const Typography = () =>
  import(/* webpackChunkName: "common" */ "@/pages/Typography.vue");
const TableList = () =>
  import(/* webpackChunkName: "common" */ "@/pages/TableList.vue");

const Product = () => import("@/pages/Products.vue");
const AddGarages = () => import("@/pages/garages/AddGarages.vue");
//login
const Login = () => import("@/pages/auth/Login.vue");
//editgarage
const EditGarage = () => import("@/pages/garages/EditGarages.vue");
//AllCars
const AllCars = () => import("@/pages/cars/AllCars.vue");
//addcars
const AddCars = () => import("@/pages/cars/AddCars.vue");
//editcars
const EditCars = () => import("@/pages/cars/EditCars.vue");
//allusers
const AllUsers = () => import("@/pages/Users/AllUsers.vue");
//addusers
const AddUsers = () => import("@/pages/Users/AddUsers.vue");
//editusers
const EditUsers = () => import("@/pages/Users/EditUsers.vue");
//all booking car
const AllBookingCar = () => import("@/pages/booking/car/BookingCar.vue");
// all booking garage
const AllBookingGarage = () => import("@/pages/booking/garage/BookingGarage.vue");
//all contacts
const AllContacts = () => import("@/pages/contact/AllContact.vue");

const routes = [
  {
    path: "/",
    component: DashboardLayout,
    redirect: "/dashboard",
    children: [
      {
        path: "dashboard",
        name: "dashboard",
        component: Dashboard,
      },
      {
        path: "profile",
        name: "profile",
        component: Profile,
      },
      {
        path: "notifications",
        name: "notifications",
        component: Notifications,
      },
      {
        path: "icons",
        name: "icons",
        component: Icons,
      },
      {
        path: "maps",
        name: "maps",
        component: Maps,
      },
        {
          path: "garages",
          name: "garages",
          component: Product,
        },
      {
        path: "typography",
        name: "typography",
        component: Typography,
      },
      {
        path: "table-list",
        name: "table-list",
        component: TableList,
      },
      {
        path: "addGarages",
        name: "addGarages",
        component: AddGarages,
      },
      {
        path: "login",
        name: "login",
        component: Login,
      },
      {
        path: '/garages/edit',
        name: 'EditGarage',
        component: EditGarage,
        props: true, // Allows route params to be passed as props
      },
      {
        //allcars
        path: "/cars/all",
        name: "AllCars",
        component: AllCars,
      },
      {
        //addcars
        path: "/cars/add",
        name: "addcars",
        component: AddCars,
      }
      , {
        //editcars
        path: "/cars/edit",
        name: "EditCar",
        component: EditCars,
         props: true,
      }
      //allusers
      , {
        path: "/users/all",
        name: "allusers",
        component: AllUsers,
      },
      {
        //addusers
        path: "/users/add",
        name: "addusers",
        component: AddUsers,
      },
      {
        //editusers
        path: "/users/edit",
        name: "editusers",
        component: EditUsers,
      },
      {
        //allbookigncar
        path: "/bookings/car/all",
        name: "allbookingsCar",
        component: AllBookingCar,
      },
      {
        //allbookigncar
        path: "/bookings/garage/all",
        name: "allbookingsGarage",
        component: AllBookingGarage,
      },
      {
        //all contact
        path: "/contact/all",
        name: "allcontacts",
        component: AllContacts,
      }
    ],
  },
  { path: "*", component: NotFound },
];

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * The specified component must be inside the Views folder
 * @param  {string} name  the filename (basename) of the view to load.
function view(name) {
   var res= require('../components/Dashboard/Views/' + name + '.vue');
   return res;
};**/

export default routes;
