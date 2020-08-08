<template>
  <div class="">
        <div class="d-flex flex-column flex-root header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
            <div class="d-flex flex-row flex-column-fluid page" >
                <dash-nav></dash-nav>
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" >
                    <dash-head :data-user="userName"></dash-head>
                    <h1>hi teacher all</h1>
                    <dash-foot></dash-foot>
                </div>
            </div>
        </div>
        <dash-user-pop :data-userdetails="userData"></dash-user-pop>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>