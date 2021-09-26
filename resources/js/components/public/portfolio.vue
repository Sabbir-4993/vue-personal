<template>
    <div class="pageCointainer">
        <section class="comonSection portfolioSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">Latest Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filterUL">
                            <li class="active filter" data-filter="all">All</li>
                            <li class="filter" data-filter="dev">Development</li>
                            <li class="filter" data-filter="graphic">Graphic</li>
                            <li class="filter" data-filter="app">App</li>
                            <li class="filter" data-filter="illustrtopm">Illustration</li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="Grid">
                    <div class="col-lg-4 folio_effect mix graphic">
                        <div class="folio_item">
                            <router-link to="/Portfolio/Portfolio-details" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="/public/frontend/assets/images/folio/1.jpg" alt="Image">
                                    </div>
                                </div>
                            </router-link>
                            <div class="folio_content">
                                <h3 class="folio_title"><router-link to="/Portfolio/Portfolio-details">Artwork Design</router-link></h3>
                                <p class="folio_cat"><router-link to="/Portfolio">Graphic</router-link></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix dev">
                        <div class="folio_item">
                            <router-link to="/Portfolio/Portfolio-details" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="/public/frontend/assets/images/folio/2.jpg" alt="Image">
                                    </div>
                                </div>
                            </router-link>
                            <div class="folio_content">
                                <h3 class="folio_title"><router-link to="/Portfolio/Portfolio-details">Web App</router-link></h3>
                                <p class="folio_cat"><router-link to="/Portfolio">Development</router-link></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix illustrtopm">
                        <div class="folio_item">
                            <router-link to="/Portfolio/Portfolio-details" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="/public/frontend/assets/images/folio/3.jpg" alt="Image">
                                    </div>
                                </div>
                            </router-link>
                            <div class="folio_content">
                                <h3 class="folio_title"><router-link to="/Portfolio/Portfolio-details">Pencil Drawing</router-link></h3>
                                <p class="folio_cat"><router-link to="/Portfolio">Illustration</router-link></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix app">
                        <div class="folio_item">
                            <router-link to="/Portfolio/Portfolio-details" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="/public/frontend/assets/images/folio/4.jpg" alt="Image">
                                    </div>
                                </div>
                            </router-link>
                            <div class="folio_content">
                                <h3 class="folio_title"><router-link to="/Portfolio/Portfolio-details">Graphic App</router-link></h3>
                                <p class="folio_cat"><router-link to="/Portfolio">App</router-link></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix graphic">
                        <div class="folio_item">
                            <router-link to="/Portfolio/Portfolio-details" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="/public/frontend/assets/images/folio/5.jpg" alt="Image">
                                    </div>
                                </div>
                            </router-link>
                            <div class="folio_content">
                                <h3 class="folio_title"><router-link to="/Portfolio/Portfolio-details">Awesome Illustration</router-link></h3>
                                <p class="folio_cat"><router-link to="/Portfolio">UI/UX</router-link></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix dev">
                        <div class="folio_item">
                            <router-link to="/Portfolio/Portfolio-details" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="/public/frontend/assets/images/folio/6.jpg" alt="Image">
                                    </div>
                                </div>
                            </router-link>
                            <div class="folio_content">
                                <h3 class="folio_title"><router-link to="/Portfolio/Portfolio-details">Frontend Development</router-link></h3>
                                <p class="folio_cat"><router-link to="/Portfolio">Development</router-link></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row loadMoreRow mb22">
                    <div class="col-lg-12 loadMoreCol text-center mt23">
                        <router-link to="/Portfolio/Portfolio-details" data-count="1" class="btt_btn bttb_dark loadMoreItem">
                            <span>
                                <i class="icon icon-Restart"></i>
                                Load More
                            </span>
                        </router-link>
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
    name: "portfolio.vue"
}
</script>

<style scoped>

</style>
