import TomSelect from "tom-select";
import "tom-select/dist/css/tom-select.css";

const select = document.getElementById("select");

if (select) {
    const control = new TomSelect("#select", {
        plugins: ["remove_button"],
        sortField: {
            field: "text",
            direction: "asc",
        },
    });
}
