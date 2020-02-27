<form method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="file" name="file">
  <input type="submit">保存</input>
</form>