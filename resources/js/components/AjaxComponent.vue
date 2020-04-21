<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <span class="badge badge-primary" v-if="is_refresh">Обновление ...</span>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Ссылка</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="url in urldata">
                            <td>{{ url.title }}</td>
                            <td>{{ url.url }}</td>
                        </tr>
                    </tbody>
                </table>
				<button class="btn btn-primary" @click="update" v-if="!is_refresh">Обновить - {{id}}</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data : function(){
            return {
                urldata: [],
                is_refresh : false,
                id : 0,
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                this.is_refresh = true;
                axios.get('/start/get-json').then((response) => {
                    console.log(response);
                    this.urldata = response.data;
                    this.is_refresh = false;
                    this.id++;
                });
            }
        }
    }
</script>
