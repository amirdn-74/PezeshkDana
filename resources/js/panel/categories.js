const deleteCategoryBtn = document.getElementById("deleteCategoryBtn");

if (deleteCategoryBtn) {
    deleteCategoryBtn.addEventListener("click", function (e) {
        e.preventDefault();

        const isConfirmed = confirm("آیا مایل به حذف این دسته بندی هستید؟");

        if (isConfirmed) {
            document.getElementById("deleteCategoryForm").submit();
        }
    });
}
