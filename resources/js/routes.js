let login = require('./components/auth/login').default;
let employee = require('./components/employee/index').default;
let user = require('./components/user/index').default;
let storeUser = require('./components/user/store').default;

export const routes = [
    {path: '/login', component: login, name: '/'},
    {path: '/employee', component: employee, name: 'employee'},
    {path: '/user', component: user, name: 'user'},
    {path: '/store-user', component: storeUser, name: 'store-user'},
];
