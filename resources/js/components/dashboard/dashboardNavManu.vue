<template>
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
                           <a  href="index-2.html" class="menu-link ">
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
                         <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                             <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                               <i class="fas fa-user-plus"></i>
                              </span>
                              <span class="menu-text">Add Teacher</span>
                           </a>
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
                                          <li class="menu-item " aria-haspopup="true" ><a  href="custom/apps/user/list-default.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">List - Default</span></a></li>
                                       </ul>
                                    </div>
                                 </li>
                               
                                 <li class="menu-item " aria-haspopup="true" ><a  href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Inbox</span><span class="menu-label"><span class="label label-danger label-inline">new</span></span></a></li>
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

                        <li class="menu-section ">
                           <h4 class="menu-text">Layout</h4>
                           <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>
                        <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                           <a  href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:/assets/media/svg/icons/Design/Bucket.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24"/>
                                       <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "/>
                                       <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
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
                        </li>

                     </ul>
                     <!--end::Menu Nav-->
                  </div>
                  <!--end::Menu Container-->
               </div>
               <!--end::Aside Menu-->
</template>

<script>
export default {

}
</script>

<style scoped>

</style>