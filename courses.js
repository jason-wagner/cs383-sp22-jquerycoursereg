$(function () {
    $('#sub').on('change', function() {
        var subject = $('#sub').val();

        $.post('getnumbers.php', {sub: subject}, function(d) {
                $('#num').html('<option></option>');

                var nums = JSON.parse(d);

                for(let i in nums)
                    $('#num').append('<option value="' + nums[i] + '">' + nums[i] + '</option>');

                $('#num').prop('disabled', false);
        });
    });

    $('#num').on('change', function() {
        var subject = $('#sub').val();
        var number = $('#num').val();

        $.post('getsections.php', {sub: subject, num: number}, function(d) {
                $('#sec').html('<option></option>');

                var secs = JSON.parse(d);

                for(let i in secs)
                    $('#sec').append('<option value="' + secs[i] + '">' + secs[i] + '</option>');

                $('#sec').prop('disabled', false);
        });
    });
});