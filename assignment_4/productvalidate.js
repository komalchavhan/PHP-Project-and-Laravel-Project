function SaveProductRecord() {
    if (document.myForm.product_name.value == "") {
        alert("Please provide your Product Name!");
        document.myForm.product_name.focus();
        return false;
    }
    if (document.myForm.product_price.value == "") {
        alert("Please provide your Product Price!");
        document.myForm.product_price.focus();
        return false;
    }
    if (document.myForm.product_caterogy.value == "") {
        alert("Please provide your Product Category Name!");
        document.myForm.product_caterogy.focus();
        return false;
    }

    return (true);
}