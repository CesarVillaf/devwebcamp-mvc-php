(function() {
    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput) {
        let tags =[];
        const tagsDiv = document.querySelector('#tags');
        const tagsInputHidden = document.querySelector('[name="tags"]');

        // Recuperar del input oculto:
        if(tagsInputHidden !== '') {
            tags = tagsInputHidden.value.split(',');
            mostrarTags();
        }

        // Escuchar los cambios en el input
        tagsInput.addEventListener('keypress', guardarTag);

        function guardarTag(e) {
            if(e.keyCode === 44) {
                e.preventDefault();
                nombre = e.target.value.trim();
                
                if(nombre !== '' || nombre > 1) {
                    tags = [...tags, nombre];
                    tagsInput.value = '';
                    mostrarTags();
                }
            }
        }

        function mostrarTags() {
            tagsDiv.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag');
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag;
                tagsDiv.appendChild(etiqueta);
            });

            actualizarInputHidden();
        }

        function eliminarTag(e) {
            e.target.remove();

            tags = tags.filter(tag => tag !== e.target.textContent);
            actualizarInputHidden();
        }

        function actualizarInputHidden() {
            tagsInputHidden.value = tags.toString();
        }
    }

    

})();
