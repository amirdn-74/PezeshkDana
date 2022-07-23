import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
// import "@ckeditor/ckeditor5-easy-image/src/easyimage";
// import "@ckeditor/ckeditor5-image/src/image";

ClassicEditor.create(document.querySelector(".ckeditor"), {
	// toolbar: [],
	fontSize: "1.4rem",
	image: {
		toolbar: ["toggleImageCaption", "imageTextAlternative"],
	},
	cloudServices: {
		// tokenUrl: "http://localhost:8000/cs-token",
		// uploadUrl: "http://localhost:8000/editor/upload",
	},
})
	.then((editor) => {
		editor.ui.view.editable.element.style.minHeight = "30rem";
	})
	.catch((error) => {
		console.error("There was a problem initializing the editor.", error);
	});
