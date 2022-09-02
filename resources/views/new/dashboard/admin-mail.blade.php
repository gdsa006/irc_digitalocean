<!DOCTYPE html>
<html>
<head>
    <title>idahoroofingcost.com</title>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>
    <h3>New Lead</h3>
    <table>
        
        <tr>
            <td>Name: </td>
            <td>{{ $details['fname'] }} {{ $details['lname'] }}</td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td>{{ $details['mobile'] }}</td>
        </tr>

        <tr>
            <td>Location</td>
            <td>{{ $details['address'] }}</td>
        </tr>
<!-- 
        <tr>
            <td>Shake Tear-off</td>
            <td>{{ $details['shake'] }}</td>
        </tr> -->

        <tr>
            <td>Complexity of Roof</td>
            <td>{{ $details['complexity'] }}</td>
        </tr>

        <tr>
            <td>Sqft</td>
            <td>{{ $details['sqft'] }}</td>
        </tr>

        <tr>
            <td>Slope</td>
            <td>{{ $details['steep'] }}</td>
        </tr>

        <tr>
            <td>Currently</td>
            <td>{{ $details['existingmaterial'] }}</td>
        </tr>

        <tr>
            <td>Urgent</td>
            <td>{{ $details['urgency'] }}</td>
        </tr>

        <tr>
            <td>Insurance</td>
            <td>{{ $details['insurance'] }}</td>
        </tr>

        <tr>
            <td>Required</td>
            <td>{{ $details['material'] }}</td>
        </tr>

        <tr>
            <td>Interested in Financing</td>
            <td>{{ $details['isinterestedinfinancing'] }}</td>
        </tr>
        
        <tr>
            <td style="font-weight: bold">Estimate</td>
            <td>{{ $details['estimate'] }}</td>
        </tr>


    </table>

   
    <p>Thank you</p>
</body>
</html>