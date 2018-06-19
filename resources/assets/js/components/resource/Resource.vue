<template>
    <div>
        <br/>
        <div class="card">
            <div class="card-header">Recursos
            </div>
            <div class="card-body">
                <form method="post" @submit.prevent="addResource">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Costo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="res in resources" :key = "res.id">
                                <th>{{res.name}}</th>
                                <th>{{res.description}}</th>
                                <th>{{res.cost}}</th>
                                <th>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i></button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th><input type="text" class="form-control" v-model="resource.name" placeholder="Nombre"></th>
                                <th><input type="text" class="form-control" v-model="resource.description" placeholder="Descripción"></th>
                                <th><input type="text" class="form-control" v-model="resource.cost" placeholder="Costo"></th>
                                <th>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i></button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <button type="submit" class="btn btn-primary btn-sm">Añadir Recurso</button>
                <br/>
            </div>
        </div>
    </div>
</template>
<script>
    module.exports = {
        data(){
            return{
                resource: {
                name: '',
                description: '',
                cost: null,
                resourceLogID: this.resourceLogId
                },
                resources:{}
            }
        },
        props:['resourceLogId'],

        methods:{
            addResource(){
                axios.post('/api/resource', this.resource)
                    .then((response)=>{
                        this.resources = response.data;
                        this.resource = {
                            name: '',
                            description: '',
                            cost: null,
                            resourceLogID: this.resourceLogId
                        }
                        console.log(response);
                        });
            }
        }

    }
</script>