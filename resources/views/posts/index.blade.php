<form method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="file" name="file">
  <input type="submit" value='送信'></input>
</form>

<img src={{$filename}}>