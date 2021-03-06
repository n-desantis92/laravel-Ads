new Vue({
    el: '#modale',
    data: {
        modale: true,
    }, created() {
        let cookie = this.getCookie('modulo');

        if (cookie == 'visitato') {
            this.modale = false;
        }else {
            this.modale = true;
        }
    },
    mounted() {
    },
    methods: {
        closeModal: function() {
            let contModal = document.getElementById('modale');
            contModal.style.display = 'none';
            this.setCookie('modulo', 'visitato');

        },

        setCookie: function(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },
        getCookie: function(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

    }
})