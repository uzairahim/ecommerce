import axios from "axios";

const instance = axios.create({
    baseURL: 'http://mashghol.com/ecommerce/BackEnd/public/api',
});

export default instance;