<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Fetch Data</title>

    </head>
    <body>

      <form class="" action="{!! route('index') !!}" method="get">

      <select name="table" id="table">
        <option value="first_name">first_name</option>
        
      </select>

      <select name="logic" id="logic">
        <option value="starts_with">starts_with</option>

      </select>
      <input type="text" class="form-control" name="search" placeholder="type here">
      <button type="submit" name="button">click to fetch</button>

    </form>
    </body>
</html>
