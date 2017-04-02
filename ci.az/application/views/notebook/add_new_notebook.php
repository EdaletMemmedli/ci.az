<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?base_url('add_notebook')?>" method="post">
      <!--'gamebook','ultrabook','notebook','laptop','netbook','2in1' -->
    <label for="">Type</label>  <select  name="type">
        <option value="gamebook">Gamebook</option>
        <option value="ultrabook">Ultrabook</option>
        <option value="notebook">Notebook</option>
        <option value="laptop">Laptop</option>
        <option value="netbook">Netbook</option>
        <option value="2in1">2in1</option>
      </select><br><br>
    <label for="">Brand</label>  <input type="text" name="brand" value=""><br><br>
    <label for="">Model</label>  <input type="text" name="model" value=""><br><br>
    <label for="">CPU</label>  <input type="text" name="cpu" value=""><br><br>
    <label for="">GPU</label>  <input type="text" name="gpu" value=""><br><br>
    <label for="">RAM</label>  <input type="ram" name="ram" value=""><br><br>
    <label for="">HDD</label>  <input type="number" name="hdd" value=""><br><br>
    <label for="">SSD</label>  <input type="number" name="ssd" value=""><br><br>
    <label for="">DESCRIPTION</label>  <textarea name="description" rows="8" cols="80"></textarea><br><br>
    <label for="">PRICE</label>  <input type="number" name="price" value=""><br><br>
    <input type="submit" name="addNewNotebookBtn" value="Add">
    </form>
  </body>
</html>
