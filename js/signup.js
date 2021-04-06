$(document).ready(function() {
    $('#sign-up-form').submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this)
        console.log(formData)
        $.ajax({
            type: "POST",
            url: 'modal/signup.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res) {
                    const data = JSON.parse(res)
                    if (!data.isError) {
                        window.location.href = ""
                    } else {
                        alert(data.message);
                    }
                } else {
                    alert('Something went wrong!')
                }
            }
        });
    });
});