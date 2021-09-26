<template>
    <div class="pageCointainer">
        <section class="comonSection mapSection mb30">
            <div class="map" id="map"></div>
        </section>
        <section class="comonSection contactSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">Contact Me</h2>
                    </div>
                </div>
                <div class="row mb30">
                    <div class="col-lg-8">
                        <div class="contact_form">
                            <form method="post" action="#" id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="required" name="full_name" placeholder="Full Name *"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="required" name="email" placeholder="Email *"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="phone" placeholder="Phone"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="required" name="sjubject" placeholder="Subject *"/>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" class="required" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btt_btn"><span><i class="icon icon-Mail"></i>Send Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4" v-for="details in personal_details" :key="personal_details.id">
                        <div class="icon_box_01">
                            <i class="icon icon-Mail"></i>
                            <h3>Email Address</h3>
                            <p>{{ details.email_pre }}</p>
                            <p>{{ details.email_alt }}</p>
                        </div>
                        <div class="icon_box_01">
                            <i class="icon icon-Phone"></i>
                            <h3>Phone Number</h3>
                            <p>{{ details.phone_pre }}</p>
                            <p>{{ details.phone_alt }}</p>
                        </div>
                        <div class="icon_box_01 addrBox">
                            <i class="icon icon-Pointer"></i>
                            <h3>Address</h3>
                            <p>
                                {{ details.address }}
                            </p>
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
    name: "contact.vue",

    data(){
        return{
            personal_details: [],
        }
    },

    methods: {
        getPersonalDetails() {
            axios.get('api/personal-details')
                .then(({data}) => (this.personal_details = data))
                .catch()
        },
    },
    created(){
        this.getPersonalDetails();
    }
}
</script>

<style scoped>

</style>
