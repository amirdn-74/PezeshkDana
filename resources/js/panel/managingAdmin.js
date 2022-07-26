const makingAdmin = () => {
    const addAdminBtn = document.getElementById("addAdminBtn"),
        addAdminForm = document.getElementById("addAdminForm");

    if (addAdminBtn && addAdminForm) {
        addAdminBtn.addEventListener("click", function (e) {
            e.preventDefault();

            const confirmation = prompt(`لطفا عبارت "CONFIRM" را وارد کنید`);

            if (confirmation !== "CONFIRM") return alert("اشتباه");

            addAdminForm.submit();
        });
    }
};

const removingAdmin = () => {
    const removeAdminBtns = document.querySelectorAll(
        '[data-action="removeAdminBtn"]'
    );

    removeAdminBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();

            const confirmation = prompt(`لطفا عبارت "CONFIRM" را وارد کنید`);

            if (confirmation !== "CONFIRM") return alert("اشتباه");

            console.log(btn.parentNode.submit());
        });
    });
};

makingAdmin();
removingAdmin();
