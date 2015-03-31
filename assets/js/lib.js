$(document).ready(function () {
    $('#newsletter').submit(function () {

            var $this = $(this),
                $response = $('#response'),
                hasError = false;

            $response.find('p').remove();

            if ( yourDetailCheck() != 5) {
                window.alert("Please check the form for errors.");
                window.scrollTo(0,0);
                return false;
            }

            if (hasError === false) {

                $response.find('p').remove();
                $response.addClass('loading');

                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    cache: false,
                    url: $this.attr('action'),
                    data: $this.serialize()
                }).done(function (data) {
                    if (data.status != 'error') {
                        window.location.href = "thank-you.php"
                    } else {
                        $response.removeClass('loading');
                        $response.html('<p>' + data.message + '</p>');
                    }
                }).fail(function () {
                    $response.removeClass('loading');
                    $response.html('<p>An error occurred, please try again</p>');
                })
            }

            return false;

    });
});