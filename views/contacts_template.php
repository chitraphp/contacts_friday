<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Contact Information</title>
</head>
<body>
    <P>hi test</P>
    {% if contact is not empty  %}
       <h2>Contact List</h2>
       <ul>
           {% for contacts in contact %}

               <li>{{ contacts.getName}}</li>
           {% endfor %}
       </ul>
       {% endif %}
</body>
</html>
