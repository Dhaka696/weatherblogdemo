<template>
<div>
 <v-navigation-drawer v-model="sidebar" app class="hidden-sm-and-up">
      <v-list>
        <v-list-tile
          v-for="item in menuItems"
          :key="item.title"
          :href="item.path">
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>{{ item.title }}</v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar app>
      <span class="hidden-sm-and-up">
        <v-toolbar-side-icon @click="sidebar = !sidebar">
        </v-toolbar-side-icon>
      </span>
      <v-toolbar-title>
        <img href='/' src="/images/logo.png" style="height:37px;"/>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-xs-only">
        <v-btn
          flat
          v-for="item in menuItems"
          :key="item.title"
          :href="item.path">
          <v-icon left dark>{{ item.icon }}</v-icon>
          {{ item.title }}
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>
    </div>
</template>
<script>
  export default {
 data(){
    return {
      sidebar: false,
      menuItems: [
          { title: 'Home', path: '/', icon: 'home' },
          { title: 'Blog', path: '/blog', icon: 'face' },
          { title: 'Industries', path: '/', icon: 'business' },
          { title: 'Services', path: '/', icon: 'local_shipping' },
          { title: 'About', path: '/', icon: 'cloud' },
          { title: 'Sign In', path: '/', icon: 'lock_open' }
     ]
    }
  }
  }
</script>