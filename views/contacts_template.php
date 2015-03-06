<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <title>Contact Information</title>
</head>
<body>
    <div class='container'>
        {% if contacts is not empty %}
        <h2> Contacts List</h2>
        <ul>
            {% for contact in contacts %}
            <li> {{contact.getName}}</li>
            <li> {{contact.getphone}}</li>
            <li> {{contact.getAddress}}</li>
            {% end for %}
        </ul>
        {% end if %}

        <h1> Create a new car</h1>
        <form action='/create_contact' method='post'>
      <div class='form-group'>
          <label for='name'>Enter Name</label>
          <input id="name" name="name" type="text"  class='form-control'>
      </div>
      <div class='form-group'>
          <label for='phone'>Enter phone number</label>
          <input id="phone" name="phone" type="text" class='form-control'>
      </div>
      <div class='form-group'>
          <label for='address'>Enter address</label>
          <input id="address" name="address" type="text" class='form-control'>
      </div>

      <button type='submit' class='btn btn-success'>Submit</button>
  </form>
    </div>
</body>
</html>
