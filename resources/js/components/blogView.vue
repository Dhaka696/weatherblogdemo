<template>
<v-flex xs12 class="mt-5 mb-5" >
					<v-layout row class="mt-3">
						<v-flex xs1 sm2></v-flex>
						<v-flex xs10 md6 >
							<v-card flat  class="grey--text text--darken-2">
								<span style="font-size:32px;" class="mt-3">{{ blog.title }}</span><br />
                                <span style="font-size:14px;" ><i>{{ blog.tag_line }}</i></span>
								<div class="mt-3">
									<span style="color:grey">POSTED BY </span>
									<strong>{{ blog.user }}</strong>
									<span style="color:grey"> ON </span>
									<strong>{{ blog.date }}</strong>
								</div>
								<v-img :src="blog.image" height="400px" class="mt-3"></v-img>
								<v-card-text style="font-size:16px;" v-html="blog.article">{{ (blog.article) }}</v-card-text>
								
							</v-card>
                            
						</v-flex> 
						<v-flex xs10 md2 class="ml-5">
                            <v-card flat> 
                                <h4 style="color:#223E6E;">Brad Miller</h4>
                                <p class="grey--text text--darken-1" style="font-size:16px;">Lead Meteorologist</p>
                                <v-img src="https://www.weatherworksinc.com/sites/default/files/Brad.jpg?1490643842" width="100px" height="100px" class="mt-3"></v-img>
                                <p style="color:#5277AC;font-size:16px;" class="mt-2"><a href='/'>View Brad's Other Blogs</a></p>
                            </v-card>
							 <h4 style="color:#223E6E;"  class="mt-5">Recent Blogs</h4>
							<v-card flat v-for="recentblog in recentblogs" :key="recentblog.title"> 
                                 
								<p style="color:#5277AC;font-size:16px;" class="mt-2"><a :href=recentblog.url>{{ recentblog.title }}</a></p>
								<p class="grey--text text--darken-1" style="font-size:16px;">{{ (recentblog.date) }} by {{ (recentblog.user) }}</p>
							</v-card>
                            <v-card flat class="mt-5"> 
                                <h4 style="color:#223E6E;">Featured Products</h4>
                             <v-img href="https://www.weatherworksinc.com/services/certified-past-weather-reports" src="/images/forensic_0.png"    class="mt-3" style="width:100%"></v-img>

                              <v-img href="https://www.weatherworksinc.com/services/certified-snowfall-totals" src="/images/certified_snowfall_totals.png"  class="mt-3" style="width:100%"></v-img>

                               <v-img href="https://www.weatherworksinc.com/services/storm-alerts"  src="/images/storm_alert_0.png"   class="mt-3" style="width:100%"></v-img>
                            </v-card>
						</v-flex>
						<v-flex xs1 sm2></v-flex>
					</v-layout>
                    

				</v-flex>
</template>

<script> 
  export default {
    props: ['blog'],
    data: function() {
        return {
            recentblogs: []  
        }
    }, 
    created: function() {  
        this.getRecentBlogs();
    },
    methods: {
        
 

        getRecentBlogs: function() {
            return axios   
                .get('/getrecentblog')
                .then(response => { 
                   this.recentblogs = response.data.items; 
                });

        }


    }
}
</script>