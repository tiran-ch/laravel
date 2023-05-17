<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <input type="text" id="name" placeholder="name"><br/><br/>
    <input type="text" id="surName" placeholder="surName"><br/><br/>
    <input type="age" id="age" placeholder="age"><br/><br/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <button type="submit" id="btn">Add</button>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    const btn = document.getElementById("btn");
    const name = document.getElementById("name");
    const surName = document.getElementById("surName");
    const age = document.getElementById("age");


    btn.addEventListener("click", function () {
        let data = {
            name: name.value,
            surName: surName.value,
            age: age.value,
        };
        $.ajax({
            'url': "/add_post",
            'type': "post",
            data: {
                data: data
            },
            success:function (e) {
                console.log(e)
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    })
</script>

</body>
</html>
