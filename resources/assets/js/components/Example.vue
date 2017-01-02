<template>
    <div class="container" style="padding-top: 50px;">

        <div class="row">
            
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">TODO LIST</div>

                    <div class="panel-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Task:</th>
                                    <th>Complated:</th>
                                </tr>
                            </thead>

                            <tbody>
                               <tr v-for="(task, index) in tasks">
                                    <td>{{task.name}}</td>
                                    <td>{{task.complated}}</td>
                                    <td>
                                        <span style="cursor: pointer" @click="removeTask(index)">x</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                tasks: [
                    {name: 'We have to prepare for c++ exam tommorow', complated: false},
                    {name: 'We have to prepare for switching this week', complated: false},
                    {name: 'We have to prepare for j2ee exam next week', complated: false},
                    {name: 'We have to finish assignment for switching next week', complated: true}

                ]
            };
        },

        computed: {
            incomplatedTask() {
                return this.tasks.filter(task => !task.complated);
            },

            complatedTask() {
                return this.tasks.filter(task => task.complated);
            },

            makeAllComplatedTask() {
                return this.tasks.map(task => {
                   return {
                        name: task.name,
                        complated: true
                   }
                });
            }
        },

        methods: {
            removeTask(index) {
               this.tasks.splice(index, 1);
            }
        }
    }
</script>
