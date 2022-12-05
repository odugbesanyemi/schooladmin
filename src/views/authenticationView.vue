<template >
    <div class="relative">
        <img src="../assets/DSC_0511.jpg" class="w-full h-full object-cover absolute inset-0 z-0" alt="">
        <div class="relative bg-gradient-to-tr z-10 from-blue-900/90  to-blue-900/90 w-screen h-screen flex flex-col items-center justify-center backdrop-blur-lg">
            <div class="center_div py-10 text-center w-11/12 md:w-7/12 lg:w-5/12 xl:w-4/12 mx-auto rounded-lg">
                <div class="title">
                    <h1 class="text-4xl font-bold text-white">LOGIN</h1>
                </div>
                <div class="bg-white rounded-lg mt-10 drop-shadow-2xl">
                    <div class="login-btn-group flex flex-row justify-around rounded-t-lg">
                        <button class=" py-5  w-full rounded-tl-lg" @click="userType='student',selectedTheme=theme.student.bg">Student Login</button>
                        <button class="w-full py-5 " @click="userType='parent',selectedTheme=theme.parent.bg">Parent Login</button>
                        <button class="w-full py-5 rounded-tr-lg" @click="userType='teacher',selectedTheme=theme.teacher.bg">Teacher Login</button>
                    </div>
                    <div class="login-btn-form bg-white/80 rounded-b-lg md:py-16 md:px-14 max-md:p-10">
                        <form action="# " class="flex flex-col justify-around">
                            <span class="text-slate-500 bg-red-50 mb-2 py-1 rounded-md" v-if="msgStatus">{{msgStatus}}</span>
                            <label for="" class=" w-full flex flex-row items-center rounded-lg p-4 bg-gray-100 mb-4">
                                <div class="w-1/12"><UserCircleIcon class="inline w-6 h-6"/></div>
                                <input type="text" class="w-full outline-none bg-transparent h-full px-3" placeholder="Enter ID Number e.g KMSST03">
                            </label>
                            <label for="" class=" w-full flex flex-row items-center rounded-lg p-4 bg-gray-100 mb-4">
                                <div class="w-1/12"><KeyIcon class="inline w-6 h-6"/></div>
                                <input type="password" class="w-full outline-none bg-transparent h-full px-3" placeholder="Enter password">
                            </label>
                            <button class="py-4 rounded-lg text-white mb-4" :class="selectedTheme">Click to Continue</button>
                            <div class="text-gray-500">Forgot Password? <span class="text-red-500 underline">Click here</span> </div>
                        </form>
                        <p>Login User type: {{userType}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {UserCircleIcon,KeyIcon} from '@heroicons/vue/24/outline'
// import {testLink} from "../../api/dbConn.php"
export default {
    components:{UserCircleIcon,KeyIcon},
    data(){
        return{
            msgStatus:'',
            userId:"",
            userPassword:"",
            userType:"student",
            theme:{
                parent:{
                    bg:"bg-green-900/60",
                    isActive:false
                },
                student:{
                    bg:"bg-red-900/60",
                    isActive:false
                },
                teacher:{
                    bg:"bg-purple-900/60",
                    isActive:false
                },
            },
            selectedTheme:"bg-red-900/60"
        }
    },
    beforeMount(){
        
    },
    mounted(){
        fetch('http://127.0.0.1:5555/api/dbConn.php?'+this.userType)
        .then(resp => resp.json())
        .then(data => console.log(data))
    },
}
</script>
<style scoped>
    .active{
        background-color: white;
    }
</style>