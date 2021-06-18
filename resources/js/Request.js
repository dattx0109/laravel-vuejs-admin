import axios from "axios";

const Request = axios.create();
Request.defaults.headers.common = { 'Authorization': 'bearer '+localStorage.getItem('token') };
export { Request };
