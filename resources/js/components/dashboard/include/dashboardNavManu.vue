<template>
<!--begin::Aside-->
            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
               <!--begin::Brand-->
               <div class="brand flex-column-auto " id="kt_brand">
                  <!--begin::Logo-->
                  <a href="/" class="brand-logo">
                  <img alt="Logo" src="/images/logo-light.png"/>
                  </a>
                  <!--end::Logo-->
                  <!--begin::Toggle-->
                  <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                     <span class="svg-icon svg-icon svg-icon-xl">
                       
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24"/>
                              <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                              <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                           </g>
                        </svg>
                        <!--end::Svg Icon-->
                     </span>
                  </button>
                  <!--end::Toolbar-->
               </div>
               <!--end::Brand-->
               <!--begin::Aside Menu-->
               <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                  <!--begin::Menu Container-->
                  <div
                     id="kt_aside_menu"
                     class="aside-menu my-4 "
                     data-menu-vertical="1"
                     data-menu-scroll="1" data-menu-dropdown-timeout="500"          >
                     <!--begin::Menu Nav-->
                     <ul class="menu-nav ">
                        <li class="menu-item  menu-item-active" aria-haspopup="true" >
                           <a  href="#" class="menu-link ">
                              <span class="svg-icon menu-icon">
                              <i class="fas fa-home"></i>
                              </span>
                              <span class="menu-text">Dashboard</span>
                           </a>
                        </li>
                        <li class="menu-section ">
                           <h4 class="menu-text">Custom</h4>
                           <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>
                         <!-- <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                               <i class="fas fa-user-plus"></i>
                              </span>
                              <span class="menu-text">Add Teacher</span>
                           </a>
                        </li> -->
                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                           <a  href="#" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <i class="fas fa-users"></i>
                              </span>
                              <span class="menu-text">Teacher</span><i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu ">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Applications</span></span></li>
                                 <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                                    <!-- <a  href="javascript:;" class="menu-link menu-toggle"> -->
                                       <router-link to='/teacher/add' class="menu-link menu-toggle">
                                          <i class="menu-bullet menu-bullet-line"><span></span></i>
                                          <span class="menu-text">Add Teacher</span>
                                          <!-- <span class="menu-label">
                                             <span class="label label-rounded label-primary">6</span>
                                          </span> -->
                                          <!-- <i class="menu-arrow"></i> -->
                                       </router-link>
                                    <!-- </a> -->
                                    <!-- <div class="menu-submenu ">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item " aria-haspopup="true" ><a  href="custom/apps/user/list-default.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Default</span></a></li>
                                       </ul>
                                    </div> -->
                                 </li>
                               
                                 <li class="menu-item " aria-haspopup="true" >
                                    <!-- <a  href="#" class="menu-link "> -->
                                    <router-link to='/teacher/all' class="menu-link">
                                       <i class="menu-bullet menu-bullet-line"><span></span></i>
                                       <span class="menu-text">All Teachers</span>
                                       <!-- <span class="menu-label">
                                          <span class="label label-danger label-inline">new</span>
                                       </span> -->
                                    <!-- </a> -->
                                    </router-link>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                           <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <i class="fas fa-users"></i>
                              </span>
                              <span class="menu-text">Classes</span><i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu ">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Applications</span></span></li>
                                 <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                                    <a  href="javascript:;" class="menu-link menu-toggle"><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Users</span><span class="menu-label"><span class="label label-rounded label-primary">6</span></span><i class="menu-arrow"></i></a>
                                    <div class="menu-submenu ">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item " aria-haspopup="true" ><a  href="#" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Default</span></a></li>
                                       </ul>
                                    </div>
                                 </li>
                               
                                 <li class="menu-item " aria-haspopup="true" ><a  href="#" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Inbox</span><span class="menu-label"><span class="label label-danger label-inline">new</span></span></a></li>
                              </ul>
                           </div>
                        </li>

                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                <i class="fas fa-tasks"></i>
                              </span>
                              <span class="menu-text">Task & Notes</span>
                           </a>
                        </li>
                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                <i class="fas fa-clipboard-check"></i>
                              </span>
                              <span class="menu-text">Assignment & Exam</span>
                           </a>
                        </li>

                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <i class="far fa-question-circle"></i>
                              </span>
                              <span class="menu-text">FAQ</span>
                           </a>
                        </li>

                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <i class="fas fa-credit-card"></i>
                              </span>
                              <span class="menu-text">Fees</span>
                           </a>
                        </li>
                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <i class="fas fa-address-card"></i>
                              </span>
                              <span class="menu-text">Contact Us</span>
                           </a>
                        </li>

                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                               <i class="fas fa-power-off"></i>
                              </span>
                              <span class="menu-text">Logout</span>
                           </a>
                        </li>

                        <!-- <li class="menu-section ">
                           <h4 class="menu-text">Layout</h4>
                           <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li> -->
                        <!-- <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                           <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:/assets/media/svg/icons/Design/Bucket.svg-->
                                 <!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24"/>
                                       <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "/>
                                       <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                             <!-- </span>
                              <span class="menu-text">Themes</span><i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu ">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Themes</span></span></li>
                                 <li class="menu-item " aria-haspopup="true" ><a  href="layout/themes/aside-light.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Light Aside</span></a></li>
                                 <li class="menu-item " aria-haspopup="true" ><a  href="layout/themes/header-dark.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Dark Header</span></a></li>
                              </ul>
                           </div>
                        </li> -->

                     </ul>
                     <!--end::Menu Nav-->
                  </div>
                  <!--end::Menu Container-->
               </div>
               <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
</template>

<script>
export default {

}
</script>

<style scoped>

</style>