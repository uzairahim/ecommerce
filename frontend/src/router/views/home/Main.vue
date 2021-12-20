<template>
    <div>
        <Slider></Slider>
        <Products></Products>
        <AboutUs></AboutUs>
        <ContactUs></ContactUs>
    </div>
</template>

<script>
    import Slider from "./Slider";
    import Products from "./Products";
    import AboutUs from "./AboutUs";
    import ContactUs from "./ContactUs";

    export default {
        components: {Slider, Products, AboutUs, ContactUs}

    };
</script>