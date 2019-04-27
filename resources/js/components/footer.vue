 <template>
  <v-footer
    dark
    height="auto"
  >
    <v-card
      class="flex"
      flat
      tile
    >
      <v-card-title class="teal">
        <strong class="subheading">   
         Weather Works "Your Weather Experts" </strong>

        <v-spacer></v-spacer>

       <v-btn
          v-for="icon in icons"
          :key=icon.key
          class="mx-3 white--text"
          icon
          :href=icon.url
          target="_blank"
        >
          <v-icon size="24px" >{{ icon.icon }}</v-icon>
        </v-btn>
      </v-card-title>

      <v-card-actions class="grey darken-3 justify-center">
        <strong>P.O. Box 7100, Hackettstown, NJ 07840 | 
Phone: 1-800-427-3456 | Fax: 908-850-8664 | <a href="https://weatherworksinc.com/privacy-policy.pdf">Privacy Policy</a> |
<a href="/sitemap">Site Map</a></strong>
      </v-card-actions>
    </v-card>
  </v-footer>
</template>
<script>
  export default {
    data: () => ({
      icons: [
        { icon: 'fab fa-facebook', url: 'https://www.facebook.com/WeatherWorks', key:1 },
        { icon: 'fab fa-twitter', url: 'https://twitter.com/weatherworks' , key:2},
        { icon: 'fab fa-linkedin', url: 'https://www.linkedin.com/company/weatherworks/' , key:3},
        { icon: 'fab fa-instagram', url: 'https://www.instagram.com/weatherworksllc/?ref=badge' , key:4} 
      ]
    })
  }
</script>