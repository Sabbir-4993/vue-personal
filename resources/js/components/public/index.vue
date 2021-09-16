<template>
    <div class="pageCointainer">
        <section class="comonSection aboutSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">About Info</h2>
                    </div>
                </div>
                <div class="row" v-for="details in personal_details" :key="personal_details.id">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="icon_box_01">
                                    <i class="icon icon-User"></i>
                                    <h3>My Name</h3>
                                    <p>{{ details.name }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon_box_01">
                                    <i class="icon icon-Calculator"></i>
                                    <h3>My Age</h3>
                                    <p>{{ details.birth }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon_box_01">
                                    <i class="icon icon-Mail"></i>
                                    <h3>Email Address</h3>
                                    <p>{{ details.email_pre }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon_box_01">
                                    <i class="icon icon-Phone"></i>
                                    <h3>Phone Number</h3>
                                    <p>{{ details.phone_pre }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon_box_01">
                                    <i class="icon icon-Pointer"></i>
                                    <h3>Address</h3>
                                    <p>{{ details.address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt30" v-for="details in personal_details" :key="personal_details.id">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle mb22">Short Bio</h2>
                    </div>
                </div>
                <div class="row" v-for="details in personal_details" :key="personal_details.id">
                    <div class="col-lg-12">
                        <div class="abContent">
                            <p>{{ details.career_objective }}</p>
                        </div>
                    </div>
                </div>
                <div class="row mt52">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">What I Do?</h2>
                    </div>
                </div>
                <div class="row itemMb30">
                    <div class="col-lg-4" v-for="whatido in what_i_do" :key="what_i_do.id">
                        <div class="icon_box_02">
                            <div class="i_div">
                                <i class="icon icon-Settings"></i>
                            </div>
                            <h3><a href="javascript:void(0);">{{whatido.topic}}</a></h3>
                            <h5>{{ whatido.sub_topic }}</h5>
                            <p>
                                {{ whatido.details }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">What They Says?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonialSlider owl-carousel">
                            <div class="singleTestimonial" v-for="say in testimonial" :key="testimonial.id">
                                <div class="testiImg">
<!--                                    <img :src="'./storage/uploads/testimonial/' + say.image" alt="">-->
                                    <span></span>
                                </div>
                                <div class="testicon">
                                        {{ say.comment  }}
                                    <div class="tesAuthor"><h5>{{ say.name }},</h5> <h6>{{ say.designation }}</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt60">
                    <div class="col-lg-5">
                        <h2 class="sectionTitle">Love To</h2>
                        <div class="singleInt">
                            <i class="interest-badminton"></i>
                            <h3>Badminton</h3>
                        </div>
                        <div class="singleInt">
                            <i class="interest-knight"></i>
                            <h3>Chase</h3>
                        </div>
                        <div class="singleInt">
                            <i class="interest-basketball"></i>
                            <h3>Basket Ball</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="sectionTitle">Languages</h2>
                        <div class="languageDiv">
                            <div class="ldInner profLevel7">
                                <h5>English</h5>
                                <span></span><span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span><span></span>
                                <i>7/10</i>
                            </div>
                            <div class="ldInner profLevel6">
                                <h5>German</h5>
                                <span></span><span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span><span></span>
                                <i>6/10</i>
                            </div>
                            <div class="ldInner profLevel4">
                                <h5>Spanish</h5>
                                <span></span><span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span><span></span>
                                <i>4/10</i>
                            </div>
                            <div class="ldInner profLevel9">
                                <h5>Bangla</h5>
                                <span></span><span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span><span></span>
                                <i>9/10</i>
                            </div>
                            <div class="ldInner profLevel7">
                                <h5>Hindi</h5>
                                <span></span><span></span><span></span><span></span><span></span>
                                <span></span><span></span><span></span><span></span><span></span>
                                <i>7/10</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-lg-12">
                        <div class="clientSlider owl-carousel">
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/8.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/9.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/10.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/11.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/12.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/13.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/14.png" alt="Client"/>
                                </a>
                            </div>
                            <div class="sliderItem">
                                <a href="javascript:void(0);">
                                    <img src="/frontend/assets/images/client/15.png" alt="Client"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt60">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">Interesting Facts</h2>
                    </div>
                </div>
                <div class="row mb30">
                    <div class="col-lg-4"  v-for="count in counters" :key="counters.id">
                        <div class="icon_box_03 text-center hasCounter" data-count="10">
                            <div class="icon_div">
                                <i><span class="counter">{{ count.counter }}</span>+</i>
                            </div>
                            <h5>{{ count.topic }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyRight">&copy; 2021 All Rights Reserved By <router-link to="/">Sabbir</router-link> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: "index.vue",

    data(){
        return{
            personal_details: [],
            what_i_do: [],
            testimonial: [],
            counters: [],
        }
    },
    methods:{
        getPersonalDetails(){
            axios.get('api/personal-details')
            .then(({data}) => (this.personal_details = data))
            .catch()
        },
        getWhatIDo(){
            axios.get('api/what-I-do')
            .then(({data}) => (this.what_i_do = data))
            .catch()
        },
        getTestimonial(){
            axios.get('api/testimonials')
            .then(({data}) => (this.testimonial = data))
            .catch()
        },
        getCounter(){
            axios.get('api/counters')
            .then(({data}) => (this.counters = data))
            .catch()
        },
    },
    created(){
        this.getPersonalDetails();
        this.getWhatIDo();
        this.getTestimonial();
        this.getCounter();
    }
}
</script>

<style type="text/css">

</style>
