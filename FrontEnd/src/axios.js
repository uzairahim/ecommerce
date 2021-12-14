import axios from "axios";

const instance = axios.create({
    baseURL: 'https://mashghol.com/ecommerce/BackEnd/public/api',
});

export default instance;