<!doctype html>
<html>
  <head>
    <title>Todo</title>
    <style>
     .container {
	 position: relative;
     }
     .container .col {
	 float:left;
	 position:relative;
	 padding: 0 20px;
     }
     .clear {
	 clear:both;
     }
     .col .list {
	 padding-left:1em;
     }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col">
	<header><h1>TODO</h1></header>
	<input name="new_item" /> <button id="new_item_btn">Add</button>
	<ul class="list">
	  <li>สอน Git <button name="delete_btn">x</button></li>
	  <li>กินกอกก <button name="delete_btn">x</button></li>
	</ul>
      </div>
      <div class="col">
	<header><h1>DOING</h1></header>
	<ul class="list">
	  <li>สอน Git <button name="delete_btn">x</button></li>
	  <li>กินกอกก <button name="delete_btn">x</button></li>
	</ul>
      </div>
      <div class="col">
	<header><h1>DONE</h1></header>
	<ul class="list">
	  <li>สอน Git <button name="delete_btn">x</button></li>
	  <li>กินกอกก <button name="delete_btn">x</button></li>
	</ul>
      </div>
      <div class="clear"></div>
    </div>
  </body>
</html>