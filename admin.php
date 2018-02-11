<?php //include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/admin.css">
</head>
<?php 
$lang = '';
if(!isset($_GET['lang']) || $_GET['lang'] === '') {
	$lang = 'et';
}
else {
	$lang = $_GET['lang'];
}
?>
<script>
	var lang = '<?php echo $lang; ?>';
	//console.log(lang);
</script>
<body>
	<div class="wrap" id="app">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="jumbotron">
						<h1 class="display-4">VoltPartner admin panel</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Раздел - КТО МЫ?
                 </button>
               </h5>
             </div>

             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
               <form @submit.prevent="sendData('description')">
                <div class="form-group">
                 <label for="exampleInputEmail1">Main text</label>
                 <textarea type="text" class="form-control" placeholder="Enter email" v-model="description.main_text">
                 </textarea>
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">Side text</label>
                 <textarea type="text" class="form-control" v-model="description.side_text">
                 </textarea>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
             </form>
           </div>
         </div>
       </div>
       <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             Пузыри
           </button>
         </h5>
       </div>
       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
         <div class="card-body">
          <form @submit.prevent="sendData('bubbles')">
           <div v-for="bubble in keys" class="form-group">
            <label>{{bubble}}</label>
            <textarea type="text" class="form-control" v-model="bubbles[bubble]">
            </textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row" style="margin-top: 20px;">
  <div class="col">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li v-for="(val, index) in services" class="nav-item">
        <a v-bind:class="{ active: index === 0, 'nav-link': true }" data-toggle="pill" :href="'#item-' + index">{{ val.label }}</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div v-for="(val, index) in services" :class="[index === 0 ? 'active': '','tab-pane','fade','show']" :id="'item-'+ index">
        <form @submit.prevent="sendServices()">
          <div v-for="s in val.items" class="form-group" style="padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,.2);">
            <p></p>
            <label for="exampleInputEmail1">Caption</label>
            <input @keypress="updateData(s)" type="text" class="form-control" v-model="spec_items[s].caption">
            <label for="exampleInputEmail1">description</label>
            <input @keypress="updateData(s)" type="text" class="form-control" v-model="spec_items[s].description">
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
<script src="js/admin.js"></script>

</body>
</html>