$(document).ready(function() {
    $('#login-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '..modal/login.php',
            data: $(this).serialize(),

            success: function(res) {
                console.log(res)
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