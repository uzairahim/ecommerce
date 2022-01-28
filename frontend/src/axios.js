import axios from "axios";

const instance = axios.create({
       baseURL: 'http://127.0.0.1:8000/api',
//       baseURL: 'https://mashghol.com/ecommerce/backend/public/api',
});

export default instance;