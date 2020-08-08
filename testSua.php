<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="updateproduct.php">
<p>ID:
    <input type="text" name="id" id="id" />
  </p>
  <p>Name:
    <input type="text" name="name" id="name" />
  </p>
  <p>Price: 
    <input type="text" name="price" id="price" />
  </p>
  <p>Description: 
    <input type="text" name="description" id="description" />
  </p>
    <p>
    <input name="tag" type="hidden" id="tag" value="add" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>

</body>
</html>