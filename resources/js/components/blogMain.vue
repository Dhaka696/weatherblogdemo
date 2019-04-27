<template>
<v-flex xs12 class="mt-5 mb-5" >
					<v-layout row class="mt-3">
						<v-flex xs1 sm2></v-flex>
						<v-flex xs10 md6 >
							<v-card flat v-for="post in posts" :key="post.title" class="grey--text text--darken-2">
								<span style="font-size:32px;" class="mt-3">{{ post.title }}</span><br />
                                <span style="font-size:14px;" ><i>{{ post.tag_line }}</i></span>
								<div class="mt-3">
									<span style="color:grey">POSTED BY </span>
									<strong>{{ post.user }}</strong>
									<span style="color:grey"> ON </span>
									<strong>{{ post.date }}</strong>
								</div>
								<v-img :src="post.image" height="400px" class="mt-3"></v-img>
								<v-card-text style="font-size:16px;">{{ (post.shortened) }}</v-card-text>
								<v-card-actions class="mb-3">
									<v-btn :href=post.url flat style="color:#5277AC;">READ MORE</v-btn>
								</v-card-actions>
							</v-card>
                             <div class="text-xs-center">
                            <v-pagination
                                v-model=pagination.current
                                :length=pagination.total
                                circle
                                @input=getData>
                        </v-pagination>
                        </div>
						</v-flex>
						<v-flex xs10 md2 class="ml-5">
							<h4 style="color:#223E6E;">Popular Blogs</h4>
							<v-card flat v-for="toppost in topposts" :key="toppost.title">
								<v-img :src="toppost.image" height="170px" class="mt-2"></v-img>
								<p style="color:#5277AC;font-size:16px;" class="mt-2" ><a :href=toppost.url> {{ toppost.title }}</a></p>
								<p class="grey--text text--darken-1" style="font-size:16px;">{{ (toppost.shortened) }}</p>
							</v-card>
						</v-flex>
						<v-flex xs1 sm2></v-flex>
					</v-layout>
                    

				</v-flex>
</template>

<script> 
  export default {
    data: function() {
        return {
            posts: [],
            topposts: [],
            pagination: {
                current: 1,
                total: 0
            }
        }
    }, 
    created: function() { 
         this.pagination.current =  Number(this.getCookies('blogpage')); 
        this.getData(this.pagination.current);
        this.getTopData();
    },
    methods: {
          setCookies: function(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            const expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },
        getCookies: function(cname) {
            const name = cname + "=";
            const ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
                }
            }
            return "";
        },

        getData: function(page) {
            return axios   
                .get('/getblog?page=' + page)
                .then(response => {
                   this.posts = response.data.items.data;
                   this.pagination.current = response.data.items.current_page;
                   this.setCookies('blogpage',  response.data.items.current_page, .08);
                   this.pagination.total = response.data.items.last_page;
                });

        },

        getTopData: function() {
            return axios   
                .get('/gettopblog')
                .then(response => { 
                   this.topposts = response.data.items; 
                });

        }


    }
}
</script>