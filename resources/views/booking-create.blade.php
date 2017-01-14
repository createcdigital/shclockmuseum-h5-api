<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example Code</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- highlight.js -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css">
</head>
<body>

<h1>Api example code:</h1>

<pre>
    <code class="js">
        &lt;script&gt;
            var data = {};
            data.name = "中文名";
            data.phone = "13564137185";
            data.date = "3号/10点";
            data.type = "团队"; // "个人"
            data.group_ppl = "30"; // if type = "个人" , than group_ppl = "0"
            data.narrator = "是"; // "是" or "否"
            data.item = "机芯组装与定制";
            data.item_time = "10:00-11:00";

            $.post('http://shclockmuseum-h5-api.createcdigital.com/booking/store', data, function(data){
                console.log(data.rs); // "success" or "store fail" or "error with message"
            }, "JSON")
        &lt;/script&gt;
    </code>
</pre>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- highlight.js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
<script>
    $(document).ready(function() {
        $('pre code').each(function(i, block) {
            hljs.highlightBlock(block);
        });

//        var data = {};
//        data.name = "中文名";
//        data.phone = "13564137185";
//        data.date = "3号/10点";
//        data.type = "团队";
//        data.group_ppl = "30";
//        data.narrator = "yes";
//        data.item = "机芯组装与定制";
//        data.item_time = "10:00-11:00";
//
//        $.post('http://192.168.1.7:8000/booking/store', data, function(data){
//            console.log(data.rs);
//        }, "JSON");
    });
</script>
</body>
</html>