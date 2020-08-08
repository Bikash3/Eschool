import Login from './components/login/loginComponent.vue';
import Dashboard from './components/dashboard/section/dash/dashboardComponent.vue';
import TeacherAdd from './components/dashboard/section/teacher/teacheraddComponent.vue';
import TeacherAll from './components/dashboard/section/teacher/teacherallComponent.vue';


export const routes = [
    { path: '/login', component: Login, name: 'login'},
    { path: '/dashboard', component: Dashboard, name: 'dashboard'},
    { path: '/teacher/add', component: TeacherAdd, name: 'teacheradd'},
    { path: '/teacher/all', component: TeacherAll, name: 'teacherall'},
];