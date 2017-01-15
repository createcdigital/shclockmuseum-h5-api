<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking List</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<table class="table table-hover">
    <tr>
        <th>姓名</th>
        <th>手机号码</th>
        <th>预约时间</th>
        <th>形式</th>
        <th>团体人数</th>
        <th>解说</th>
        <th>预约体验项目</th>
        <th>项目预约时间</th>
    </tr>

    @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->phone }}</td>
            <td>{{ $booking->date }}</td>
            <td>{{ $booking->type }}</td>
            <td>{{ $booking->group_ppl }}</td>
            <td>{{ $booking->narrator }}</td>
            <td>{{ $booking->item }}</td>
            <td>{{ $booking->item_time }}</td>
        </tr>
    @endforeach

</table>
</body>
</html>