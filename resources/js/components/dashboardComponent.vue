<template>
    <div class="">
        <div class="d-flex flex-column flex-root header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
            <div class="d-flex flex-row flex-column-fluid page">
                <dash-nav></dash-nav>
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <dash-head></dash-head>
                    <MainPage></MainPage>
                    <dash-foot></dash-foot>
                </div>
            </div>
        </div>
        <UserPop></UserPop>        
    </div>
</template>

<script>
import MainPage from './dashboard/dashboardBody.vue'
import UserPop from './dashboard/dashUserPop.vue'

export default {
    components: {
        MainPage,
        UserPop
    }
}
</script>
<style scoped>
    @import "/css/css.css";
    @import "/css/fullcalendar.bundle7a4a.css";
    @import "/css/plugins.bundle7a4a.css";
    @import "/css/prismjs.bundle7a4a.css";
    @import "/css/style.bundle7a4a.css";
    @import "/css/header/dark7a4a_base.css";
    @import "/css/header/dark7a4a_menu.css";
    @import "/css/dark7a4a_brand.css";
    @import "/css/dark7a4a_aside.css";
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css);
</style>