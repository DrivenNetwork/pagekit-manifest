$(function(){

    new Vue({
        el:'#manifest',

        data:{
            manifest: $data.manifest,
            options:{
                icons: {
                    size: [28, 36],
                    density: [0.75, 1, 1.5, 2, 3, 4],
                    type: ['image/gif', 'image/png', 'image/x-icon','image/webp'],
                    extention: ['gif', 'png', 'ico', 'webp']
                },
                dir:['ltr', 'rtl','auto'],
                display:['fullscreen','standalone','minimal-ui','browser'],
                orientation:['any','natural','landscape','landscape-primary','landscape-secondary','portrait','portrait-primary','portrait-secondary']
            }
        },

        methods: {
            save: function(){
                this.$http.post('admin/manifest/save', {manifest: this.manifest}).then(
                function(){
                    UIkit.notify('Saved');
                }).catch( function(){
                    UIkit.notify('Couldn\'t Save');
                })
            }
        }
    });

});
