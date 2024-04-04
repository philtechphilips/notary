<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notary message from {{ $name }}</title>
</head>

<body>
    <table style="width: 100%;">
        <tr style="background-color: #fff; padding: 20px 0;">
            <td>
                <p>Name: {{ $name }}</p>
                <p>Email: {{ $email }}</p>
                <p>Contact: {{ $contact }}</p>
                <p>Selected Service: {{ $service }}</p>
                <p>messages: {{ $messages }}</p>
            </td>
        </tr>
    </table>
</body>

</html>
