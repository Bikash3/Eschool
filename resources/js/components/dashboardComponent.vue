<template>
    <div class="">
        <div class="d-flex flex-column flex-root header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
            <div class="d-flex flex-row flex-column-fluid page" >
                <dash-nav></dash-nav>
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" >
                    <dash-head :data-user="userName"></dash-head>
                    <MainPage></MainPage>
                    <dash-foot></dash-foot>
                </div>
            </div>
        </div>
        <UserPop :data-userdetails="userData"></UserPop>
    </div>
</template>

<script>
import axios from 'axios';

import MainPage from './dashboard/dashboardBody.vue'
import UserPop from './dashboard/dashUserPop.vue'

export default {
    data() {
      return {
         userData: [],
         userName: null,
         url: this.$route.params.post == 'teacher' ? '/api/employee/single/'+this.$route.params.id : 
              this.$route.params.post == 'staff'? '/api/employee/single/'+ this.$route.params.id : '/api/student/single/'+ this.$route.params.id
      }
   },
    components: {
        MainPage,
        UserPop
    },
    methods: {
      userDetails() {
        axios
        .get(this.url)
        .then(res => (
            this.userName = res.data.data[0].name, 
            this.userData = res.data.data[0]
        ))
        .catch(function(err){
            console.error(err)
        });
      }
   },
   mounted() {
       this.userDetails()
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