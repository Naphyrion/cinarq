<template>
    <div>
        <div class="card">
            <div class="card-header">Bitácora de Recursos
            </div>
            <div class="card-body">
                <form method="post" @submit.prevent = "newResourceLog">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="applicant">Solicitante</label>
                            <input type="text" :class="[createdLog ? 'form-control-plaintext': 'form-control']" :readonly="createdLog" class="" id="resourceLog.applicant" v-model="resourceLog.applicant" aria-describedby="applicanttHelp" placeholder="Solicitante">
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pme_action">Acción PME</label>
                            <input type="text" :class="[createdLog ? 'form-control-plaintext': 'form-control']" id="resourceLog.pme_action" v-model="resourceLog.pme_action" aria-describedby="pmeActionHelp" placeholder="Acción PME">
                            
                        </div>
                        <div class="form-group col-md-4">
                            <label for="project">Proyecto</label>
                            <input type="text" :class="[createdLog ? 'form-control-plaintext': 'form-control']" id="resourceLog.project" v-model="resourceLog.project" aria-describedby="projectHelp" placeholder="Proyecto">
                            
                        </div>
                        <div class="form-group col-md-4">
                            <label for="extracurricular_activitie">Taller Extraescolar</label>
                            <input type="text" :class="[createdLog ? 'form-control-plaintext': 'form-control']" id="resourceLog.extracurricular_activitie" v-model="resourceLog.extracurricular_activitie" aria-describedby="extracurricular_activitieHelp" placeholder="Taller extracurricular">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción breve de la actividad</label>
                        <textarea :class="[createdLog ? 'form-control-plaintext': 'form-control']" id="resourceLog.description" v-model="resourceLog.description" aria-describedby="descriptionHelp" placeholder="Descripción"></textarea>
                    </div>
                     <div v-if="!createdLog" class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <resource v-if="createdLog" :resourceLogId="resourceLog.id"></resource>
    </div>
</template>
<script>
    module.exports = {
        data(){
            return {
                resourceLog:{
                    id: null,
                    description: '',
                    pme_action: '',
                    project: '',
                    extracurricular_activitie: '',
                    applicant: ''
                },
                createdLog: false
            }
        },
        methods: {
            newResourceLog(){
                
                axios.post('/api/resource-log', this.resourceLog)
                    .then((response)=> {
                    this.resourceLog = response.data;
                    this.createdLog = true;
                    console.log(response.data)
                    });
            
            }

        }
    }
</script>