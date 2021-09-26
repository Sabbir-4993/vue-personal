<template>
    <div class="pageCointainer">
        <section class="comonSection resumeSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="sectionTitle">Education</h2>
                        <div class="kr-accordion">
                            <div class="card" id="edication_accordion" v-for="edu in academic" :key="academic.id">
                                <div class="card-header" id="ea_01">
                                    <h2 class="mb-0">
                                        <a class="" href="#" data-toggle="collapse" data-target="#ea_col_01" aria-expanded="true" aria-controls="ea_col_01">
                                            <i class="icon icon-Medal"></i>
                                            <span>{{edu.edu_name_title}}</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ea_col_01" class="collapse show" aria-labelledby="ea_01" data-parent="#edication_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>{{edu.institute_name}}</span><br><br> <span>Year Passing: {{ edu.passing }}</span><span>Result: {{ edu.result }}</span>
                                            <br><br><span>{{edu.subject}}</span> </div>
                                        {{edu.details}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="sectionTitle">Experience</h2>
                        <div class="kr-accordion" id="exps_accordion">
                            <div class="card" v-for="company in work" :key="work.id">
                                <div class="card-header" id="ex_01">
                                    <h2 class="mb-0">
                                        <a class="" href="#" data-toggle="collapse" data-target="#ex_col_01" aria-expanded="true" aria-controls="ex_col_01">
                                            <i class="icon icon-Cup"></i>
                                            <span>{{ company.company_name }}</span>
                                        </a>
                                    </h2>
                                </div>
                                <div id="ex_col_01" class="collapse show" aria-labelledby="ex_01" data-parent="#exps_accordion">
                                    <div class="card-body">
                                        <div class="ac_meta"><span>{{ company.from_to }}</span><span>{{company.designation}}</span></div>
                                        {{company.description}}
                                    </div>
                                </div>
                            </div>
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
    name: "resume.vue",

    data(){
        return{
            academic: [],
            work: [],
        }
    },
    methods:{
        getAcademicDetails(){
            axios.get('api/academic-details')
            .then(({data}) => (this.academic = data))
            .catch()
        },
        getWorkDetails(){
            axios.get('api/work-details')
            .then(({data}) => (this.work = data))
            .catch()
        }
    },
    created() {
        this.getAcademicDetails();
        this.getWorkDetails();
    }
}
</script>

<style scoped>

</style>
