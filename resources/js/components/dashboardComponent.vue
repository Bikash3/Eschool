<template>
    <div>
        <Navmanu></Navmanu>
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <Header></Header>
            <Body></Body>
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
import Navmanu from './dashboard/dashboardNavManu.vue'
import Header from './dashboard/dashboardHeader.vue'
import Footer from './dashboard/dashboardFooter.vue'
import Body from './dashboard/dashboardBody.vue'

export default {
    components: {
        Navmanu,
        Header,
        Footer,
        Body
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