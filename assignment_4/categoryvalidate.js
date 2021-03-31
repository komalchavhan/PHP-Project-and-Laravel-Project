function SavePersonRecord() {
    if (document.myForm.cname.value == "") {
        alert("Please provide your Category Name!");
        document.myForm.cname.focus();
        return false;
    }

    return (true);
}