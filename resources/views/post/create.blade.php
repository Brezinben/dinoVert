<form method="post" action=" {{route('pages.storeContact')}}">
    @csrf
    <script src="https://cdn.tiny.cloud/1/qg3ec6i44rbiw5399mtl1ltcql76g4o3w42gj7c4d7ix2wa5/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <textarea id="mytextarea" name="mytextarea">
      Hello, World!
    </textarea>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <button type="submit">valider</button>
</form>
