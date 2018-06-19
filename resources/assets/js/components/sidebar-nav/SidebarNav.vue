<style>
    #sidebar-nav{
        background-color:#343a40;  
        transition: all 1s ease;
        
    }
    #sidebar-nav .sidebar-nav-wraper{
        height: calc(100vh - 56px);
        padding: .5em .5em 0 .5em;
        overflow-y: auto;
    }
    #sidebar-nav .sidebar-nav-header{
        padding: .5em;
        height: 56px;
        color: #c2c7d0;
    }
        #sidebar-nav .sidebar-nav-header span.grey{
        color:#616669;  
    }
    #main-content{
        transition: all 1s ease;
    }
    #sidebar-nav .nav .nav-item{
        padding-top: .5em;
    }
    #sidebar-nav .nav-link[aria-expanded="true"] .dropmenu-icon {
        transform: rotate(-90deg);  
    }
    #sidebar-nav .nav .nav-item .nav-link{
        transition: all .3s ease;
        color:#c2c7d0;
    }
    #sidebar-nav .nav .nav-item .nav-link.active:hover{
        background-color: #007bff !important;
        color:#c2c7d0;
    }
    #sidebar-nav .nav .nav-item .nav-link:hover{
        background-color: #616669;
    }
    #sidebar-nav .nav-item a.submenu-active{
        background-color: rgba(255,255,255,.9);
        color: #343a40 !important;
    }
      #sidebar-nav .nav-item a.submenu-active:hover{
        background-color: rgba(255,255,255,.9) !important;
        color: #343a40 !important;
    }
    #sidebar-nav .nav-item .dropmenu-icon{
        transform-origin: 50% 60%;
        transition: transform ease-in-out .3s;
        pointer-events: none;
    }
     #sidebar-nav .nav-item .nav-icon{
        text-align: center;
        width: 1.6rem;
        font-size: 1.2rem;
        margin-right: .2rem;
    }
</style>
<template>
   <div id="sidebar-nav" class="col-md-2">
       <div class="sidebar-nav-header text-center">
           <h3>CIN<span class="grey">ARQ</span></h3>
       </div>
       <div class="sidebar-nav-wraper">
            <ul class="nav nav-pills nav-fills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="nav-icon fas fa-tachometer-alt "></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
                        <i class="nav-icon fas fa-chalkboard-teacher "></i>Colegiatura <i class="nav-icon dropmenu-icon float-right fas fa-angle-left"></i>
                    </a>
                    
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item"><a class="nav-link " href="">Orders</a></li>
                        </ul>
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="/resource-log"><i class="nav-icon fas fa-list-alt "></i> Bitácora de Recursos</a>
                </li>
            </ul>
       </div>
   </div>
</template>

<script>
    module.exports = {
        data(){
            return {
                actualURL: window.location.pathname
            } 
        },
        methods:{          
            
        },
        mounted(){
            $("a.nav-link[href='"+this.actualURL+"']").addClass("active");
            $("#sidebar-nav .nav .nav-item .nav-link").on("click", (e)=>{
                if($(e.target).attr("data-toggle")=="collapse" && $(e.target).hasClass("collapsed")){
                    $(e.target).addClass("submenu-active");
                }else{
                    $(e.target).removeClass("submenu-active");
                }
            });

            let click = 0;
            $("#sidebar-nav-toggle").on("click", (e)=>{
                e.preventDefault();
                if(click == 0){
                    $("#sidebar-nav").removeClass("col-md-2");
                    $("#main-content").removeClass("col-md-10");
                    $("#sidebar-nav").addClass("col-md-1");
                    $("#main-content").addClass("col-md-11");
                    click = 1;
                }else{
                    $("#sidebar-nav").removeClass("col-md-1");
                    $("#main-content").removeClass("col-md-11");
                    $("#sidebar-nav").addClass("col-md-2");
                    $("#main-content").addClass("col-md-10");
                    click = 0;
                }
            })
        }
    }
</script>
