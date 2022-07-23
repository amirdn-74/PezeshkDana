import TomSelect from "tom-select";
import "tom-select/dist/css/tom-select.css";

new TomSelect("#select", {
	plugins: ["remove_button"],
	sortField: {
		field: "text",
		direction: "asc",
	},
});
