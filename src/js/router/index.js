import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home'
import Company from '../views/Company'
import Report from '../views/Report'
import Verification from '../views/Verification'
import Print from '../views/Print'
import Users from '../views/Users'

const routes = [
  {
    path: '/admin',
    name: 'Home',
    component: Home
  },
  {
    path: '/admin/company',
    name: 'Company',
    component: Company
  },
  {
    path: '/admin/report',
    name: 'Report',
    component: Report
  },
  {
    path: '/admin/verification',
    name: 'Verification',
    component: Verification
  },
  {
    path: '/admin/print',
    name: 'Print',
    component: Print
  },
  {
    path: '/admin/users',
    name: 'Users',
    component: Users
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
