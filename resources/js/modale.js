new Vue({
    el: '#modale',
    data: {
        modale: true,
    },
    methods: {
        closeModal: function() {
            let contModal = document.getElementById('modale');
            contModal.style.display = 'none';
        }
    }
})