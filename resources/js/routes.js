let login = require('./components/auth/Login').default;
let register = require('./components/auth/Register').default;
let logout = require('./components/auth/Logout').default;
let home = require('./components/home/Home').default;
let employee = require('./components/employee/Index').default;
let user = require('./components/user/Index').default;
let storeUser = require('./components/user/Create').default;

export const routes = [
    {path: '/login', component: login, name: 'login'},
    {path: '/register', component: register, name: 'register'},
    {path: '/logout', component: logout, name: 'logout'},
    {path: '/', component: home, name: 'home'},
    {path: '/employee', component: employee, name: 'employee'},
    {path: '/user', component: user, name: 'user'},
    {path: '/store-user', component: storeUser, name: 'store-user'},
];
